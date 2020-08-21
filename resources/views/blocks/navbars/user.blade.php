<div class="dtuser">

    @if (!Auth::guest())
    <div class="gravatar">
        <div class="image">
            <a href="{{ route('cms.account')}}">
                <img alt="" src="https://secure.gravatar.com/avatar/c229b807133a6f3424bf09bb800492a0?s=35&amp;d=mm&amp;r=g" srcset="https://secure.gravatar.com/avatar/c229b807133a6f3424bf09bb800492a0?s=70&amp;d=mm&amp;r=g 2x" class="avatar avatar-35 photo" height="35" width="35" loading="lazy">
            </a>
        </div>

        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" id="dooplay_signout">Выйти</a>
    </div>
    @else

        <a href="#" class="clicklogin"> <i class="icon-person"></i> </a>
    @endif


</div>
@php( $logout_url = View::getSection('logout_url') ?? config('adminlte.logout_url', 'logout') )

@if (config('adminlte.use_route_url', false))
    @php( $logout_url = $logout_url ? route($logout_url) : '' )
@else
    @php( $logout_url = $logout_url ? url($logout_url) : '' )
@endif
<form id="logout-form" action="{{ $logout_url }}" method="POST" style="display: none;">
    @if(config('adminlte.logout_method'))
        {{ method_field(config('adminlte.logout_method')) }}
    @endif
    {{ csrf_field() }}
</form>
