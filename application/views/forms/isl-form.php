<!-- ISL2.0 Registration -->
<?= form_open('ax/register/new/', ['id' => 'registerForm', 'name' => 'registration_form']) ?>
<!-- <form action="<?= base_url('ax/register/new/') ?>" method="post" id="competitionForm"> -->
<input type="hidden" name="form_type" value="registration_form">
<div class="row m-0">
    <div class="col-12">
        <div class="mb-3">
            <label for="formName" class="form-label">Your Name</label>
            <input type="text" name="name" class="form-control" id="formName" placeholder="John Doe" required>
        </div>
    </div>
    <div class="col-12">
        <div class="mb-3">
            <label for="formEmail" class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control" id="formEmail" placeholder="name@example.com" required>
        </div>
    </div>
    <div class="col-12">
        <div class="mb-3">
            <label for="formContact" class="form-label">Contact Number</label>
            <input type="text" name="contact" class="form-control" id="formContact" placeholder="99 9999 9999" minlength="10" maxlength="10" required>
        </div>
    </div>
    <input type="hidden" name="captcha" value="<?= $captcha['word'] ?>">
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-primary me-2 mb-3">Submit</button>
    <button type="reset" class="btn btn-secondary me-2 mb-3">Reset</button>
</div>
</form>
<script>
    $(document).ready(() => {
        $.validator.addMethod("letters", function(value, element) {
            return this.optional(element) || value == value.match(/^[a-zA-Z '\s]*$/);
        });
        jQuery.validator.addMethod("email", function(value, element) {
            return this.optional(element) || value == value.match(/[A-Za-z0-9_-]*@[A-Za-z0-9_-]*[.][A-Za-z]*/);
        });
        jQuery.validator.addMethod("digits", function(value, element) {
            return this.optional(element) || value == value.match(/[0-9]*/);
        });
        $("#registerForm").validate({
            rules: {
                name: {
                    required: true,
                    letters: true
                },
                email: {
                    required: true,
                    email: true
                },
                contact: {
                    digits: true
                }
            },

            messages: {
                name: {
                    required: "Name is required",
                    letters: "Only letters and spaces are allowed",
                },
                email: {
                    required: "Email Address is required",
                    email: "Invalid Email Format",
                },
                institute: {
                    required: "You must belong to a school in Navi Mumbai."
                },
                contact: {
                    required: "Contact Number is required",
                    digits: "Only digits are accepted",
                },
                age: {
                    required: "Group is required",
                },
                submitHandler: function(form) { // for demo
                    alert('valid form');
                    return false;
                }
            }
        });
    });
</script>