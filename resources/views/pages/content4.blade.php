<link rel="stylesheet" href="{{asset('css/form.css')}}"/>
<div class="block4" style="position: relative">
    <img class="bot_content ani_slideInLeft" src="{{asset('images/rm373batch16-55 1 (1).png')}}">
    <button style="position: absolute; right: 50%; transform: translate(50%, -50%);" class="button-more mt-4">More
        News
    </button>
    <div class="login-box">
        <h2 style="color: #03e9f4;">SEND INFOMATION </h2>
        <form id="my-form">
            @csrf
            <div class="user-box">
                <input type="text" name="name" id="name" required>
                <label>Name</label>
            </div>
            <div class="user-box">
                <input type="email" name="email" id="email" required>
                <label>Email</label>
            </div>
            <div class="user-box">
                <input type="number" name="phone" id="phone" required>
                <label>Phone</label>
            </div>
            <button href="#" type="submit">
                SIGN UP NOW!
            </button>
        </form>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#my-form').submit(function(event) {
            // Ngăn chặn gửi form theo cách truyền thống.
            event.preventDefault();

            // Lấy dữ liệu từ form.
            let name = $('input[name=name]').val();
            let phone = $('input[name=phone]').val();
            let email = $('input[name=email]').val();
            // Gửi yêu cầu POST đến URL của Router test.
            $.post('{{ route('send') }}', {
                "_token": "{{ csrf_token() }}",
                name: name,
                phone: phone,
                email: email
            }, function(response) {
                console.log(response);
                alert('The information was send');
                $('#name').val('');
                $('#phone').val('');
                $('#email').val('');
            }).fail(function(xhr) {
                console.log(xhr.responseText);
            });
        });
    });
</script>