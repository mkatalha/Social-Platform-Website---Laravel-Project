@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
   <div class="col-3 p-5">
   <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAb1BMVEVCZ7L///+5w95GarM2YK80Xq+pttc+ZbFfe7s6YrCHmsmZqdA8Y7Ds8PdSdLlffr3V3OyQpNFrh8Lg5vIvW633+fyCmsxKb7fG0eier9WtutnAy+Ta4e91jsR8k8eMn8zP1ulvh8Dx9PkmVqvo7ff2SOu1AAAEYklEQVR4nO3da3uqOBSG4YDBmDYkHEStp1qn//83jqfuvWemoxGarBWu9/myP9XNfS0sIJGK7FpZ1Y0VY8k2dVXeZOL6T+6kNtTb9YMZLV3+h7B1cky8a0a69ktYWU29OUHStroKWzu+AV4ztr0I3TgneE67szCX1NsRMJlnonRj3UfPGVeKaswjPA2xEvV434XndC2aMe+kp920EeM5Vfu+sfsQQgghhBBCCCGEEPJJKWOM1lpKfc5cUkoo6g37mbQshG12+8XLe/1+6mWx3+8+GjezSyXnRXESq1SpyuhiPlmsq21bHrvudrc667ruWJafn227rQ6b9euisUWStySUFM3r6pfrfq/pEc18Oa2OfryzMLW7Lnry4Tu9JGeoin31DC+1GSrjDk/NL7UZmsn0aV9SM5R2+7wvoRmq4q3HABMSnoC9fMnspWqy6glMZIbKbPoCU5lhf2AaMyym/YFJzFDXA4ApzNA0/qfZSc5QyWfPRFOboR7yJkxBaNygfTSBvXTe+1CfyAyNGwjkPkOlhv2a4T9Ds+t3QZHODE0+FMh8hmo5eITMZygHna+lMEPZ63OLhITGlY8FD4Wc91LZ95OLfwgZz1ANufD9LWQ8Q2U/f0LIeIZm9gSk267y9Xo9/XfrD8bfFtELX95xs58tJ0rLb2IMFIXnCU05nRQmyRvbc7+jYTXTCeIuSa9r343ivB/eb+kjLJfpAk3jc9q9Y3wweJTZewhXyS4nEZ4XFu8Jj1Do18fA0iY8Qq/z7kNBvZVD8rkfM01aKNceb0PGFw6P8zlpS/tL2D7C2eiFSf8q9RIuqTdyUD7CCfVGDgpCCPkHIYT8gxBC/kEIIf8ghJB/EELIv1EI1Xc33r/6y0NoinuvcIr4E2Pl/rt24o88bnLf+/FLb7RE/fLYMLDP+diFK9pbNxGEa9o7qBGExKvaIghfxi7sdrQ3p8ILqR9FHl7YEt9+Cy+sJmMXHoiX24QX5sRrNcIL30Y/wz3xSobwQuq/WxFeSOuLIOxor50iCNvRCzfUC/uCC8mXLgYX1tQriIMLqQ+HwYUd+eLM0MLSUS9dDC3cki/ODC08EF8dhhduqN+GwYXEH5ZGENJ/BTiwsCM/HAYXkh8OQwuP9OvcQwupz7uDC7fUV4cn4XtQIfG9w3Nq6Wb/n/V4ZsS9n59x+LuG6l5zj5UKwtx5AWrdw0ax2uRuEELIPwgh5B+EEPIPQgj5ByGE/IMQQv5BCCH/IISQfxBCyD8IIeQfhBDyD0II+QchhPyDEEL+QQgh/yCEkH8QQsg/CCHkH4QQ8g9CCPkHIYT8gxBC/kEIIf8g/EEh0bMJogmtIHrMSyyhaURN8zCiWEJdi4rmgVKxhLISRA82jyQ0rhRZTjLESEKZZyLrHMU7MY5Qu+wkzFpLsJ9GERrbXoRZZeNPMYZQ2yq7CrPWydhjDC800rXZlzDrcid1VGRgodHS3f4HcXu1sqqbmCdwYYW2qavy9ip/A3YKUMidEST2AAAAAElFTkSuQmCC" style="max-height: 75px">
   </div>
   <div class="col-6 pt-5">
<div><h1> Md Kawsar Alam </div>
    <div class="d-flex">
        <div class="pr-5"><strong>0</strong> friends</div>
        <div class="pr-5"><strong>0</strong> following</div>
        </div>
    </div>
    <div class="col-3 p-5"><a href="/p/create">Add New Post</a></div>
    <div class="row pt-5">

        @foreach($posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        @endforeach
    </div>
    {{-- <div class="row">
        <div class="col-4">
            <img src="https://scontent.fdac23-1.fna.fbcdn.net/v/t31.18172-8/16825818_403417446675310_4514484017632159041_o.jpg?_nc_cat=102&ccb=1-3&_nc_sid=174925&_nc_ohc=5AC01kVKkxAAX-1MqWL&_nc_ht=scontent.fdac23-1.fna&oh=29c748b4261826f2348be2283be10d07&oe=6095B184" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent.fdac23-1.fna.fbcdn.net/v/t1.6435-9/106916009_1159311577752556_6212521548417091797_n.jpg?_nc_cat=100&ccb=1-3&_nc_sid=174925&_nc_ohc=27wiOdNyOpQAX_PvvNG&_nc_ht=scontent.fdac23-1.fna&oh=2cff193992694880acc9c555aa38b79e&oe=60957A2C" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent.fdac23-1.fna.fbcdn.net/v/t1.6435-9/171580514_1373806432969735_9036337114220351738_n.jpg?_nc_cat=111&ccb=1-3&_nc_sid=730e14&_nc_ohc=9pG6j-QFzukAX-x4ol6&_nc_ht=scontent.fdac23-1.fna&oh=61276d82707d1a5f6372f9389a23529b&oe=60951CE9" class="w-100">
        </div>
</div> --}}
@endsection
