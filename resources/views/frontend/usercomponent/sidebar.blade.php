<div class="col-md-3 pt-0">
    <div class="list-group list-group-flush account-settings-links">
        <a class="list-group-item list-group-item-action active" data-toggle="list"
           href="#account-general">General</a>
        <a class="list-group-item list-group-item-action" data-toggle="list"
           href="#account-change-password">Change password</a>
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">Info</a>
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#order-info"> Order Info</a>
        <a class="list-group-item list-group-item-action" data-toggle="list"
           href="#account-social-links">Social links</a>
        <a class="list-group-item list-group-item-action" data-toggle="list"
           href="#account-connections">Connections</a>
        <a class="list-group-item list-group-item-action" data-toggle="list"
           href="#account-notifications">Notifications</a>

        <form action="{{route('logout')}}" method="post">
            @csrf
            <button class="list-group-item list-group-item-action"   type="submit" href="{{route('logout')}}">Logout</button>
        </form>
    </div>
</div>
