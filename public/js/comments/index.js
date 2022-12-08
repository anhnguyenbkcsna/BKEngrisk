$(".table").DataTable({
  // dom: "Bfrtip", //Thêm dom vào thì nó sẽ hiện đồng thời giữa language và bottom
  responsive: true,
  lengthChange: false,
  autoWidth: false,
  language: {
    url: "//cdn.datatables.net/plug-ins/1.10.25/i18n/Vietnamese.json",
  },
});

$(".btn-edit").click(function (e) {
  var id = $(this).data("id");
  var name = $(this).data("name");
  var content = $(this).data("content");
  console.log(hehe);
  $("#EditStudentModal input[name='id']").val(id);
  $("#EditStudentModal input[name='content']").val(content);
  $("#EditStudentModal input[name='name']").val(name);
  $("#EditStudentModal").modal("show");
});

$(".btn-delete").click(function (e) {
  var id = $(this).data("id");
  $("#DeleteStudentModal input[name='id']").val(id);
  $("#DeleteStudentModal").modal("show");
});
$(".btn-hide").click(function (e) {
  var id = $(this).data("id");
  $("#HideStudentModal input[name='id']").val(id);
  $("#HideStudentModal").modal("show");
});
