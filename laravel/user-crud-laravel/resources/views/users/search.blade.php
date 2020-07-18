<form id="custom-search-form" class="form-search form-horizontal pull-right" action="{{route('users.search',$user->name)}}" method="get">
    <div class="input-append spancustom">
        <input type="text" class="search-query" name="character" placeholder="Character/guild name">
        <button type="submit" class="btn"><i class="icon-search"></i></button>
    </div>
</form>