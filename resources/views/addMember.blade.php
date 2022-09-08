<link rel="stylesheet" href="{{asset('Css/style.css')}}">

<h1>Add Members</h1>
@if(session()->has('message'))
    <div class="successMsg">
        {{session()->get('message')}}
    </div>
@endif
<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="enter name"><br/><br/>
    <input type="text" name="email" placeholder="enter email"><br/><br/>
    <input type="text" name="address" placeholder="enter address"><br/><br/>

    <button type="submit">Add Member</button>

</form>