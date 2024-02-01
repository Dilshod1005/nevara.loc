// $(function(){
//
//     $('#add-to-cart').click(function (e){
//         e.preventDefault();
//         var id=$(this).data('id');
//         var href=$(this).attr('href');
//         var count=$('.cart-plus-minus-box').val();
//
//         $.ajax({
//             data: {id:id,son:count},
//             url:href,
//             type:'GET',
//             success:function (res){
//                 if (!res) return false;
//                 $('#loading').html(res);
//                 var sonn=$('#total-count').html();
//                 $('#wash-lists').html(sonn);
//                 $('#counter').html(sonn);
//             }
//         });
//         $('#modal_one').modal('show').find('#loading').load();
//     })
//
//
//     $('#modal_one').on('click','.remove-product',function (e){
//         e.preventDefault();
//         var href=$(this).attr('href');
//         $.ajax({
//             url:href,
//             type:'GET',
//             success:function (res){
//                 if (!res) return false;
//                 $('#loading').html(res);
//                 var sonn=$('#total-count').html();
//                 $('#wash-lists').html(sonn);
//                 $('#counter').html(sonn);
//             }
//         });
//         $('#modal_one').modal('show').find('#loading').load();
//     });
//
//
//     $('.clicked').click(function (e){
//         e.preventDefault();
//         var href=$(this).attr('href');
//         $.ajax({
//             type:'GET',
//             url: href,
//             success:function (res){
//                 if(!res) return false;
//                 $('#loading').html(res);
//                 var sonn=$('#total-count').html();
//                 $('#wash-lists').html(sonn);
//                 $('#counter').html(sonn);
//             }
//         });
//         $('#modal_one').modal('show').find('#loading').load();
//     });
//
//     $('.modal-one').click(function(event){
//         event.preventDefault();
//         let id=$(this).data('id');
//         var url=$(this).attr('href');
//         $.ajax({
//             data:{id:id},
//             url:url,
//             type:'GET',
//             success:function (res){
//                 if (!res) return false;
//                 $('#loading').html(res);
//             },
//             error:function (){
//                 console.log('Xatolik mavjud');
//             }
//         });
//         $('#modal_one').modal('show').find('#loading').load();
//     })
// })


$('.modal-one').on('click', function (event){
    event.preventDefault();
    $('#myModal').modal('show');
});
// function send(_url, formData = null){
//     $.ajax({
//         url: _url,
//         type: 'POST',
//         dataType: "json",
//         data: formData,
//         success:function (data){
//             if (data.status === false) {
//                 $('#myModal').modal('show').find('#modalContent').html(data.content);
//                 $('#save').on('click', function (e) {
//                     e.preventDefault();
//                     const form = $('#form-id').serialize();
//                     send(_url, form);
//                     return false
//                 });
//                 return false;
//             }else {
//                 location.reload();
//             }
//
//         }
//     })
//}