<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.js"></script>

<!-- Competition -->
<div class="title d-none mb-3">
    <h3>Admission Open</h3>
    <p>Academic Year <?= date('Y') . "-" . date_format(date_create("+1 Year"), "Y") ?></p>
</div>
<?= form_open('ax/admission/new/', ['id' => 'admissionForm', 'name' => 'admission_form']) ?>
<!-- <form action="<?= base_url('ax/register/new/') ?>" method="post" id="admissionForm"> -->
<input type="hidden" name="form_type" value="admission_form">
<div class="row m-0">
    <div class="col-12">
        <div class="mb-2">
            <label for="formInstituteLocation" class="form-label">School Location</label>
            <select name="location" id="formInstituteLocation" class="form-control" required>
                <option value="">Select School Location</option>
                <option value="Airoli">Airoli</option>
                <option value="Thane">Thane</option>
                <option value="Panvel">Panvel</option>
            </select>
        </div>
    </div>
    <div class="col-12">
        <div class="mb-3">
            <label for="formInstitute" class="form-label">School Name</label>
            <select name="institute" id="formInstitute" class="form-control" required>
                <option value="">Select School Location First</option>
            </select>
        </div>
    </div>
    <div class="col-12">
        <div class="mb-3">
            <div class="row g-0 gap-1">
                <div class="col-md-auto col-12">
                    <?= $captcha['image'] ?>
                </div>
                <div class="col-md col-12">
                    <input type="text" name="captcha" class="form-control" placeholder="Re-enter the Captcha">
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="">
            <button type="submit" class="btn btn-primary me-2 mb-3">Submit</button>
            <button type="reset" class="btn btn-secondary me-2 mb-3" data-bs-dismiss="modal">Reset</button>
        </div>
    </div>
</div>
</form>
<script>
    $(document).ready(function() {
        $('select#formInstituteLocation').on('change', function() {
            var optionSelected = $("option:selected", this);
            var valueSelected = this.value;
            $.ajax({
                url: '<?= base_url("api/schools/get") ?>',
                method: 'post',
                data: {
                    "city": valueSelected,
                },
                dataType: 'json',
                success: function(response) {
                    console.log(response);

                    // Remove options
                    $('select#formInstitute').find('option').remove();

                    // Add options
                    $("select#formInstitute").append(new Option("Select School", ""));
                    $.each(response, function(index, data) {
                        $("select#formInstitute").append(new Option(data, data));
                    });
                }
            });
        });
    });


    $(document).ready(function() {
        $.validator.addMethod("letters", function(value, element) {
            return this.optional(element) || value == value.match(/^[a-zA-Z '\s]*$/);
        });
        jQuery.validator.addMethod("email", function(value, element) {
            return this.optional(element) || value == value.match(/[A-Za-z0-9_-]*@[A-Za-z0-9_-]*[.][A-Za-z]*/);
        });
        jQuery.validator.addMethod("digits", function(value, element) {
            return this.optional(element) || value == value.match(/[0-9]*/);
        });
        $("#admissionForm").validate({
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
                    required: "Age is required",
                },
                submitHandler: function(form) { // for demo
                    alert('valid form');
                    return false;
                }
            }
        });
    });
</script>