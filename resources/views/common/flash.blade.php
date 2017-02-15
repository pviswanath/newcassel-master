<!-- resources/views/common/flash.blade.php -->

@if(Session::has('flash_message'))
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{ Session::get('flash_message') }}
    </div>
@endif

