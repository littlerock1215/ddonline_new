var current_datatable;
var datatables = {};

var addRowClickEvent = function(row) {
    var id = $(row).attr('data-id')

    $(row).find('td:last-child').off('click').on('click', function() {
    });
};

var change_current_datatable = function(tab_key){
    current_datatable = datatables[tab_key];
}

var submit_filter = function(){
    current_datatable.draw();
};

var clear_filter = function(){
    current_datatable.search('').columns().search('').draw();
};

$(function() {
    $.fn.dataTable.ext.errMode = function(s,h,m){}

    var datatables_language = {
        "aria": {
            "sortAscending": ": activate to sort column ascending",
            "sortDescending": ": activate to sort column descending"
        },
        "emptyTable": I18n.t('datatables.empty_table'),
        "info": I18n.t('datatables.info'),
        "infoEmpty": I18n.t('datatables.info_empty'),
        "infoFiltered": I18n.t('datatables.info_filtered'),
        "lengthMenu": I18n.t('datatables.length_menu'),
        "zeroRecords": I18n.t('datatables.zero_records'),
        "processing": I18n.t('datatables.processing'),
        "paginate": {
            "previous": I18n.t('datatables.previous'),
            "next": I18n.t('datatables.next'),
            "last": I18n.t('datatables.last'),
            "first": I18n.t('datatables.first')
        },
    };

    // 列表頁的 datatables 設定
    $('.inbox_letters_table').each(function(){
        var table = $(this);
        var tab_key = table.data('tab_key');

        var datatable = table.DataTable({
            language: datatables_language,
            paging: true,
            responsive: true,
            searching: true,
            processing: false,
            serverSide: true,
            stateSave: false,
            autoWidth: false,
            select: true,
            deferLoading: false,
            dom: 'Brtip"bottom"l',
            ajax: {
                url: '/inbox_letters/datatables.json',
                dataSrc: 'data',
                type: 'POST',
                data: {
                },
            },
            columns:[
                {
                    data: 'internal_letter_id',
                    name: 'internal_letter_id_eq',
                    visible: false,
                    orderable: true,
                    className: 'editable col-internal_letter_id',
                    editField: 'internal_letter_id',
                },
                {
                    data: 'title',
                    name: 'title_cont',
                    visible: true,
                    orderable: true,
                    className: 'editable col-title',
                    editField: 'title',
                },
                {
                    data: 'content',
                    name: 'content_cont',
                    visible: true,
                    orderable: true,
                    className: 'editable col-content',
                    editField: 'content',
                },
                {
                    data: 'created_at',
                    name: 'created_at_between',
                    visible: true,
                    orderable: true,
                    className: 'editable col-created_at',
                    editField: 'created_at',
                },
                {
                    data: 'read_at',
                    name: 'read_at_between',
                    visible: true,
                    orderable: true,
                    className: 'editable col-read_at',
                    editField: 'read_at',
                },

                {
                    // 操作
                    data: null,
                    visible: true,
                    orderable: false,
                    render: function ( data, type, full, meta ) {
                        var id = data.id;
                        var master_show_tab_value = typeof master_show_tab !== 'undefined' ? master_show_tab : '';
                        var actions = '<a href="/inbox_letters/' + id + '?master_show_tab='+ master_show_tab_value +'" class="btn btn-default m-r-5"><span class="glyphicon glyphicon-eye-open"></span></a>';
                        actions += '<a href="/inbox_letters/' + id + '" data-confirm="確定刪除?" class="btn btn-default" rel="nofollow" data-method="delete"><span class="glyphicon glyphicon-trash"></span></a>';
                        return actions;
                    },
                },
            ],
            lengthMenu: [
                [10, 20, 50, 100, 1000],
                [10, 20, 50, 100, I18n.t('helpers.datatables.length_menu_all')]
            ],
            buttons: [
            ],
            iDisplayLength: 10,
            rowCallback: function( row, data, index ) {
                $(row).attr('data-id', data.id);
                addRowClickEvent(row);
            },
            fnPreDrawCallback: function(){
                $('.dataTables_processing').css("visibility","visible");
                $('.dataTables_processing').css({"display": "block", "z-index": 10000 })
            },
        });

        // Activate an inline edit on click of a table cell
        $("#"+ tab_key +"_inbox_letters_table").on( 'click', 'tbody td.editable', function (e) {
        } );

        datatable.on('row-reorder', function(e, diff, edit){
            var data = {rows_sorting:{}}
            var result = '';

            for ( var i=0, ien=diff.length ; i<ien ; i++ ) {
                data['rows_sorting'][$(diff[i].node).data('id')] = diff[i].newData;
            }

            $.ajax({
                type: 'patch',
                url: '/inbox_letters/update_row_sorting',
                data: data,
                datatype: 'json'
            });
        });

        datatables[tab_key] = datatable;
    });

    // 關鍵字查詢
    $('#keyword_search').keyup(function(e){
        datatablesUtils.keyword_filter(datatables, $(this).val());
    });

    // 查詢條件值更新事件處理器
    $('.filter-condition-panel .filter-condition').change(function(e){
        datatablesUtils.column_string_filter(datatables, e.target.name);
    });

    $('.filter-condition-panel .filter-range-condition').change(function(e){
        datatablesUtils.column_range_filter(datatables, e.target.name);
    });

    $('.filter-condition-panel .filter-select-condition').on('select2:close', function(e){
        datatablesUtils.column_select_filter(datatables, e.target.name);
    });

    // 送出查詢
    $('button.filter-button').click(function(e){
        submit_filter();
    });

    // 清空查詢
    $('button.reset-button').click(function(e){
        $('input').val('');
        $('select').val('').trigger('change.select2');
        clear_filter();
    });

    // 點擊頁籤
    $('.inbox_letter__tab').on('click', function(){
        var tab = $(this);
        var tab_key = tab.data('tab_key');
        var tab_column_name = tab.data('tab_column_name');
        change_current_datatable(tab_key);
        datatablesUtils.column_filter(current_datatable, tab_column_name, tab_key == "all" ? '' : tab_key);
        submit_filter();
    });

    // 初次進入頁面
    change_current_datatable('all');
    clear_filter();
});
