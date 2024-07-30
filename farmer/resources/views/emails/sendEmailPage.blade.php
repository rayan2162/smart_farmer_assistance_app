<!doctype html>
<html lang="en">
<head>

</head>
<body>
    <div class="container">
        <h2>Send an Email</h2>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="/send-email" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Your Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea name="message" class="form-control" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
</body>
</html>