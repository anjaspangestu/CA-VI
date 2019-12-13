table = $("#table-categories").dataTable({
    processing: true,
    serverSide: true,
    ajax: "/dashboard",
    columns: [{
            data: 'id',
            name: 'id'
        },
        {
            data: 'judul_kategori',
            name: 'Nama Kategori'
        },
        {
            data: 'created_at',
            name: 'created_at'
        },
        {
            data: 'updated_at',
            name: 'updated_at'
        },
        {
            data: 'action',
            name: 'action',
            orderable: false,
            searchable: false
        }
    ]
});