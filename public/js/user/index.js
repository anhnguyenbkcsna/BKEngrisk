$("#tab-user").DataTable({
	// dom: "Bfrtip", //Thêm dom vào thì nó sẽ hiện đồng thời giữa language và bottom
	responsive: true,
	lengthChange: false,
	autoWidth: false,
	language: {
		url: "//cdn.datatables.net/plug-ins/1.10.25/i18n/Vietnamese.json",
	},
});

$(function () {
	$('[data-toggle="tooltip"]').tooltip();
});

$(".btn-edit").click(function (e) {
	var username = $(this).data(un);
	var fname = $(this).data("fname");
	var lname = $(this).data("lname");
	var gender = $(this).data("gender");
	var yob = $(this).data("yob");
	var email = $(this).data("email");
	var phone = $(this).data("phone");
	var address = $(this).data("address");
	var img = $(this).data("img");


	$("#EditUserModal input[name='name']").val(username);
	$("#EditUserModal input[name='fname']").val(fname);
	$("#EditUserModal input[name='lname']").val(lname);
	$("#EditUserModal input[name='yob']").val(yob);
	if (gender == 'Nam')
		$("#EditUserModal #Nam").prop(
			"checked",
			true
		); //Search checked input radio jquery
	else $("#EditUserModal #Nu").prop("checked", true);
	$("#EditUserModal input[name='email']").val(email);
	$("#EditUserModal input[name='phone']").val(phone);
	$("#EditUserModal input[name='address']").val(address);
	$("#EditUserModal input[name='img']").val(img);
	$("#EditUserModal").modal("show");
});

$("btn-changepass").click(function (e) {
	var email = $(this).data("email");
	$("#EditPassModal input[name='email']").val(email);
	$("#EditPassModal").modal("show");
});

$(".btn-delete").click(function (e) {
	var email = $(this).data("email");
	var img = $(this).data("img");
	$("#DeleteUserModal input[name='email']").val(email);
	$("#DeleteUserModal input[name='img']").val(img);
	$('#DeleteUserModal').modal('show');
})