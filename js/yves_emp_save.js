function displayImage() {
  var fileInput = document.getElementById("uploadfile");
  var picBox = document.getElementById("pic-box");
  var picPathInput = document.getElementById("picpath");

  if (fileInput.files && fileInput.files[0]) {
    var imageUrl = "temp/" + fileInput.files.item(0).name;
    console.log(imageUrl)
    var picimage = document.getElementById('pic-image')
    picimage.src = imageUrl;
    // picBox.style.backgroundImage = `url(${imageUrl})`;
    // picBox.style.backgroundSize = "cover";
    picPathInput.value = imageUrl;
  }
}

$(document).ready(function () {
  // Save Form
  $("#save").click(function (e) {
    e.preventDefault();

    var formData = {};
    $(".form-control").each(function () {
      var fieldName = $(this).attr("id");
      var fieldValue = $(this).val();
      formData[fieldName] = fieldValue;
    });
    console.log(formData);

    $.ajax({
      type: "POST",
      url: "process/emp_info_save.php",
      data: formData,
      dataType: "json",
      success: function (result) {
        if (result.ok) {
          var frm = document.getElementById(
            "form_employee_registration_save"
          );
          frm.reset();
          document.getElementById('pic-img').src = "Images/Assets/placeholder.jpg";
          alert("Data successfully added!");
        }
      },
    });
  });
    $("#uploadfile").change(function(e){
        var formData = new FormData($("#pic-upload")[0])
        $.ajax({
            type:"POST",
            url:'process/upload_pic.php',
            data :formData,
            contentType:false,
            processData:false,
            dataType:'json',
            success: function(result){
                if(result.ok){
                  displayImage()
                }else{
                    alert('Error occured')
                }
            }
        })
    })
  });