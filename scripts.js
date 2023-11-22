$(document).ready(function() {
  $('#yogaForm').submit(function(event) {
    event.preventDefault(); // Ngăn chặn gửi form mặc định

    // Lấy dữ liệu từ form
    var formData = $(this).serialize();

    // Gửi dữ liệu đến process_form.php sử dụng Ajax
    $.ajax({
      type: 'POST',
      url: 'process_form.php',
      data: formData,
      success: function(response) {
        alert('Gửi thành công!');
        // Có thể thêm logic xử lý sau khi gửi thành công ở đây
      },
      error: function(error) {
        alert('Đã xảy ra lỗi trong quá trình gửi.');
        // Xử lý lỗi nếu cần thiết
      }
    });
  });
});
