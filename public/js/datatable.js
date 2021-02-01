




$(function () {



    $(".table_siswa").on('draw.dt', function () {
        let n = 0;
        $(".number").each(function () {
            $(this).html(++n);
        })
    });

    $('.table_guru').DataTable({
        "ajax": {
            'url': baseUrl('Guru/getAllGuru'),
            "dataSrc": 'data'
        },
        "columns": [
            {
                "data": null, "sortable": false,
                "render": function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            { 'data': 'nik' },
            { 'data': 'nama_guru' },
            { 'data': 'pendidikan_terakhir' },
            { 'data': 'jurusan' },
            { 'data': 'asal_sekolah' },
            { 'data': 'alamat' },
            { 'data': 'email' },
            { 'data': 'no_telp' },
            {
                "data": 'id',
                "render": function (data, type, row) {
                    return '<div class="btn-group"> <a href="' + baseUrl('Guru/pageUpdateGuru/' + data) + '" class="btn btn-success mr-1 ml-1">Update</a><a href="' + baseUrl('Guru/deleteGuru/' + data) + '" class="btn btn-danger mr-1 ml-1">Delete</a></div>';
                }
            }
        ],
        "autoWidth":true,
        "responsive":true


    });

    $(".table_guru").on('draw.dt', function () {
        let n = 0;
        $(".number").each(function () {
            $(this).html(++n);
        })
    });


    $('.table_pelajaran').DataTable({
        "ajax": {
            'url': baseUrl('Pelajaran/getAllPelajaran'),
            "dataSrc": 'data'
        },
        "columns": [
            {
                "data": null, "sortable": false,
                "render": function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            { 'data': 'mata_pelajaran' },
            { 'data': 'jurusan' },
            { 'data': 'kelas' },
            {
                "data": 'id',
                "render": function (data, type, row) {
                    return '<div class="btn-group"> <a href="' + baseUrl('Pelajaran/pageUpdatePelajaran/' + data) + '" class="btn btn-success mr-1 ml-1">Update</a><a href="' + baseUrl('Pelajaran/deletePelajaran/' + data) + '" class="btn btn-danger mr-1 ml-1">Delete</a></div>';
                }
            }
        ],
        "responsive": true

    });

    $(".table_pelajaran").on('draw.dt', function () {
        let n = 0;
        $(".number").each(function () {
            $(this).html(++n);
        })
    });


    $('.table_siswa').DataTable({
        "ajax": {
            'url': baseUrl('Siswa/getAllSiswa'),
            "dataSrc": 'data'
        },
        "columns": [
            {
                "data": null, "sortable": false,
                "render": function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },

            { 'data': 'nis' },
            { 'data': 'nama_lengkap' },
            { 'data': 'kelas' },
            { 'data': 'jurusan' },
            { 'data': 'tempat_lahir' },
            { 'data': 'tanggal_lahir' },
            { 'data': 'alamat' },
            { 'data': 'email' },
            { 'data': 'no_telp' },
            {
                "data": 'id',
                "render": function (data, type, row) {
                    return '<div class="btn-group"> <a href="' + baseUrl('Siswa/pageUpdateSiswa/' + data) + '" class="btn btn-success mr-1 ml-1">Update</a><a href="' + baseUrl('Siswa/deleteSiswa/' + data) + '" class="btn btn-danger mr-1 ml-1">Delete</a></div>';
                }
            }
        ],
        "responsive": true

    });

    $(".table_siswa").on('draw.dt', function () {
        let n = 0;
        $(".number").each(function () {
            $(this).html(++n);
        })
    });


    $('.table_nilai_siswa').DataTable({
        "ajax": {
            'url': baseUrl('Siswa/getAllNilai'),
            "dataSrc": 'data'
        },
        "columns": [
            {
                "data": null, "sortable": false,
                "render": function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },

            { 'data': 'nis' },
            { 'data': 'nama_lengkap' },
            { 'data': 'Kelas' },
            { 'data': 'jurusan' },
            { 'data': 'nilai_uh' },
            { 'data': 'nilai_uts' },
            { 'data': 'nilai_uas' },
            { 'data': 'rata_rata' },
            { 'data': 'predikat' },
            {
                "data": 'id',
                "render": function (data, type, row) {
                    return '<div class="btn-group"> <a href="' + baseUrl('Siswa/pageUpdateNilaiSiswa/' + data) + '" class="btn btn-success mr-1 ml-1">Update</a><a href="' + baseUrl('Siswa/deleteNilaiSiswa/' + data) + '" class="btn btn-danger mr-1 ml-1">Delete</a></div>';
                }
            }
        ],


        "dom": 'Bfrtip',
        "buttons": [
            {
                "extend": 'excelHtml5',
                "text": 'Export Excel',
                "className": 'btn-success mr-1 ml-1',
                "exportOptions": {
                    columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                },
                "title": 'Report Nilai Siswa',
                
                
                
                "customize": function (xlsx) {
                    var sheet = xlsx.xl.worksheets['sheet1.xml'];

                    $('c[r]', sheet).attr('s', '25');
    
                }
            },

            {
                "extend": 'pdf',
                "text": 'Export PDF',
                "exportOptions": {
                    columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                },
                "className": 'btn-danger mr-1 ml-1',
                "title": 'Report Nilai Siswa',
                
            }
        ],
        "responsive": true

    });

    $(".table_nilai_siswa").on('draw.dt', function () {
        let n = 0;
        $(".number").each(function () {
            $(this).html(++n);
        })
    });

    // $(".table_nilai_siswa").on('buttons-action', function (e, buttonApi, dataTable, node, config) {

    //     $('.table_nilai_siswa').prepend('<caption><h2>Report Nilai Siswa</h2></caption>');
    //     $('.table_nilai_siswa').attr('border','1');
    //     $('.table_nilai_siswa').css('border-collapse','collapse');

    //     console.log( 'Button '+buttonApi.text()+' was activated' );

    // });

});

function baseUrl(whereTo) {
    return 'http://' + window.location.hostname + '/penilaianpweb/' + whereTo;
}