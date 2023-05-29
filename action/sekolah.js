let save_method; //for save method string
let table;
 
$(document).ready(function() {
 
    //datatables
    table = $('#myTable').DataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "sekolah/ajax_list",
            "type": "POST"
        },
 
        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
        },
        ],
 
    });
 
});

 
function tambah() {
    $("#deskripsi").summernote({
        height: 200,
        toolbar: [
            //[groupname, [button list]]
    
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['view', ['codeview']],
        ]
    });

    $('#deskripsi').summernote('code', '');

    save_method = 'add';
    $('#titleModal').text("Tambah Data Sekolah"); // tittle modal
    $('#myForm')[0].reset(); // reset form on modals
    $(".needs-validation").removeClass('was-validated'); // clear error class
    // $('.help-block').empty(); // clear error string
    $('#exampleModal').modal('show'); // show bootstrap modal
}
 
function edit(id)
{
    save_method = 'update';
    $('#myForm')[0].reset(); // reset form on modals
 
    //Ajax Load data from ajax
    $.ajax({
        url : "sekolah/ajax_edit/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('#idne').val(data.id);
            $('#nama').val(data.nama);
            $('#npsn').val(data.npsn);
            $('#alamat').val(data.alamat);
            $('#tipe_sekolah').val(data.tipe_sekolah);
            $('#lintang').val(data.lintang);
            $('#bujur').val(data.bujur);
            $("#deskripsi").summernote({
                height: 200,
                toolbar: [
                    //[groupname, [button list]]
            
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['view', ['codeview']],
                ]
            });
            $('#deskripsi').summernote('code', data.deskripsi);
            $('#exampleModal').modal('show'); // show bootstrap modal when complete loaded
            // pesan berhasil
            $('#titleModal').text("Edit Data User"); // Set title to Bootstrap modal title
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            swal("Gagal!"," Data Gagal Ditampilkan", "error"); // pesan gagal
        }
    });
}
 
function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
}
 
function save()
{
    event.preventDefault();
    $('#btnSave').text('Loading...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    let url;
 
    if(save_method == 'add') {
        url = "sekolah/ajax_add";
        msgSuccess = "Data Berhasil Ditambahkan";
        msgError = "Data Gagal Ditambahkan";
    } else {
        url = "sekolah/ajax_update";
        msgSuccess = "Data Berhasil Diubah";
        msgError = "Data Gagal Diubah";
    }
 
    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#myForm').serialize(),
        dataType: "JSON",
        success: function(data)
        {
            if(data.status) { //if success close modal and reload ajax table
                $('#exampleModal').modal('hide');
                swal("Good job!", msgSuccess, "success"); // pesan berhasil
                reload_table();
            } else {
                $(".needs-validation").addClass('was-validated');
            }
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
 
 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert(jqXHR);
            alert(textStatus);
            alert(errorThrown);
            swal("Gagal!", msgError, "error"); // pesan gagal
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
 
        }
    });
}
 
function hapus(id)
{
    if(confirm('Apakah anda yakin akan menghapus data ini?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "sekolah/ajax_delete/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                $('#modal_form').modal('hide');
                swal("Good job!", "Data Berhasil Dihapus", "success"); // pesan berhasil
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
              swal("Gagal!", "Data Gagal Dihapus", "error"); // pesan gagal
            }
        });
 
    }
}