$(document).ready(function () {
	$("#daftar_siswa").DataTable(
			
	);
});

$(document).ready(function () {
	$("#teman").DataTable();
});


//popover
var popoverTriggerList = [].slice.call(
	document.querySelectorAll('[data-bs-toggle="popover"]')
);
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
	return new bootstrap.Popover(popoverTriggerEl);
});

$(document).ready(function () {
	$("#add_question").summernote({
		placeholder: "Tulis sesuatu...",
		height: 100,
		toolbar: [
			// [groupName, [list of button]]
			["style", ["clear", "bold", "italic"]],
			["insert", ["link"]],
		],
	});
	$("#add_question").on("summernote.enter", function (we, e) {
		$(this).summernote("pasteHTML", "<br><br>");
		e.preventDefault();
	});
	$("#add_answer").summernote({
		placeholder: "Tulis komentarmu...",
		height: 100,
		toolbar: [
			// [groupName, [list of button]]
			["style", ["clear", "bold", "italic"]],
			["insert", ["link"]],
		],
	});
	$("#add_answer").on("summernote.enter", function (we, e) {
		$(this).summernote("pasteHTML", "<br><br>");
		e.preventDefault();
	});
	$(".note-editable").click(function () {
		$(".btn-diskusi").show();
	});
	$(".note-placeholder").click(function () {
		$(".btn-diskusi").show();
	});
	$("#add_materi").summernote({
		placeholder: "Tulis sesuatu...",
		height: 500,
		toolbar: [
			// [groupName, [list of button]]
			["style", ["style"]],
			["style", ["clear", "bold", "italic"]],
			["fontsize", ["fontsize"]],
			["insert", ["picture", "link", "video"]],
			["para", ["ul", "ol"]],
			["view", ["codeview"]],
		],
		styleTags: [
			"p",
			{
				title: "Blockquote",
				tag: "blockquote",
				className: "blockquote",
				value: "blockquote",
			},
			"pre",
		],
	});
// 	$("#add_materi").on("summernote.enter", function (we, e) {
// 		$(this).summernote("pasteHTML", "<br><br>");
// 		e.preventDefault();
// 	});
	$(".dropdown-toggle").dropdown();
});
//animejs
