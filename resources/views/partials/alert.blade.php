@if (session('success'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>{{ session('success') }}</strong>
</div>
@endif

@if (session('warning'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{{ session('warning') }}</strong>
</div>
@endif
