<html lang="en" class=""><head><script src="//static.codepen.io/assets/editor/live/console_runner-ce3034e6bde3912cc25f83cccb7caa2b0f976196f2f2d52303a462c826d54a73.js"></script><script src="//static.codepen.io/assets/editor/live/css_live_reload_init-890dc39bb89183d4642d58b1ae5376a0193342f9aed88ea04330dc14c8d52f55.js"></script><meta charset="UTF-8"><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico"><link rel="mask-icon" type="" href="//static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111"><link rel="canonical" href="https://codepen.io/SitePoint/pen/jAKmow?editors=0100#0">

<link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/darkly/bootstrap.min.css">
<style class="cp-pen-styles">.container {
  margin-top: 20px;
}

.panel-heading {
  font-size: larger;
}

.alert {
  display: none;
}

/**
 * Error color for the validation plugin
 */
.error {
  color: #e74c3c;
}
</style></head><body>
<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">
      <a href="https://jqueryvalidation.org/" target="_blank">Validation</a>
    </div>
    <div class="panel-body">
      <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>Successfully submitted!</strong> The form is valid.
      </div>
      <form role="form" >
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
          <label for="email">Email address:</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
		 <div class="form-group">
          <label for="email">Age</label>
          <input type="text" class="form-control" id="age" name="age">
        </div>
		<div class="form-group">
          <label for="email">Username</label>
          <input type="text" class="form-control" id="username" name="username">
        </div>
        <button type="submit" class="btn btn-default">Subscribe</button>
      </form>
    </div>
  </div>
</div>

<script src="//static.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js"></script><script src="//code.jquery.com/jquery-2.2.4.min.js"></script><script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script><script src="//cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
<script>var $form = $("form"),
  $successMsg = $(".alert");
$.validator.addMethod("letters", function(value, element) {
  return this.optional(element) || value == value.match(/^[a-zA-Z\s]*$/);
});
$form.validate({
  rules: {
    name: {
      required: true,
      minlength: 3,
      letters: true
    },
    email: {
      required: true,
      email: true
    },
	 age: {
      required: true,
	  number: true,
   
    },
	username: {minlength: 4, required: true, remote: {url: "check.php", type : "post"}},
  },
  messages: {
    /*name: "Please specify your name (only letters and spaces are allowed)",
    email: "Please specify a valid email address",
	age:"Age Cannot be blank(must be integer)",*/
	email:{
		 required: "Please Enter email!",
         email: "This is not a valid email!",
	},
	age:{
	     required: "Please Enter age!",
         number: "This is not a valid age!",
	},
	name:{
		 required: "Please Enter name!",
         minlength: "This is not a valid length!",
         letters: "please enters characters"
	},
	username: {
         required: "Please Enter Email!",
         minlength: "This is not a valid length!",
         remote: "username already in use!"
        }
  },
  submitHandler: function() {
    $successMsg.show();
  }
});
//# sourceURL=pen.js
</script>
https://jsfiddle.net/samuelj90/0hx0bnk9/2/	
</body></html>
