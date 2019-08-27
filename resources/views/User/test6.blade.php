@extends('UserLayouts.index')

@section('content')
<div style="margin:40px">


     <p class="likeBtn" @click="likePost(12)">
            <i class="fa fa-thumbs-up"></i>Like
     </p>
</div>

@endsection
