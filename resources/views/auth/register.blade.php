<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="I Play With Me, A awesome social website!">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>Registration - I PLAY WITH ME</title>

    @include('css_inc')

            <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login tooltips">

<!-- BEGIN PANEL DEMO -->
<!-- END PANEL DEMO -->


<!--
===========================================================
BEGIN PAGE
===========================================================
-->
<div class="login-header text-center">
    <img src="{{ asset('/img/logo.png') }}" class="logo" alt="Logo">
</div>

<div class="login-wrapper">

    <form role="form" method="post" action="/auth/register">
        {!! csrf_field() !!}
        <div class="form-group has-feedback lg left-feedback no-label">
            <input type="text" class="form-control no-border input-lg rounded" name="username" value="{{ old
                  ('username') }}" placeholder="Choose username" required autofocus>
            <span class="fa fa-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback lg left-feedback no-label">
            <input type="email" class="form-control no-border input-lg rounded" name="email" value="{{ old
                  ('email') }}" required placeholder="Enter email">
            <span class="fa fa-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback lg left-feedback no-label">
            <input type="password" class="form-control no-border input-lg rounded" name="password" required
                   placeholder="Enter password">
            <span class="fa fa-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback lg left-feedback no-label">
            <input type="password" class="form-control no-border input-lg rounded" name="password_confirmation"
                   placeholder="re-enter password">
            <span class="fa fa-unlock form-control-feedback"></span>
        </div>
        <div class="form-group">
            <div class="checkbox">
                <label class="inline-popups">
                    <input type="checkbox" class="i-yellow-flat" name="iaccept"> I accept <a href="#text-popup"
                                                                                             data-effect="mfp-zoom-in">Terms
                        and conditions</a>
                </label>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-warning btn-lg btn-perspective btn-block">REGISTER</button>
        </div>
    </form>
    <p class="text-center"><strong><a href="/auth/login">已有账户?</a></strong> | <strong><a
                    href="/">游客</a></strong></p>

    <div id="text-popup" class="white-popup wide mfp-with-anim mfp-hide">
        <div>当您申请用户时，表示您已经同意遵守本规章。<br>
            欢迎您加入本站点参与交流和讨论，本站点为社区，为维护网上公共秩序和社会稳定，请您自觉遵守以下条款：<br>
            <br>
            一、不得利用本站危害国家安全、泄露国家秘密，不得侵犯国家社会集体的和公民的合法权益，不得利用本站制作、复制和传播下列信息：<br>
            　（一）煽动抗拒、破坏宪法和法律、行政法规实施的；<br>
            　（二）煽动颠覆国家政权，推翻社会主义制度的；<br>
            　（三）煽动分裂国家、破坏国家统一的；<br>
            　（四）煽动民族仇恨、民族歧视，破坏民族团结的；<br>
            　（五）捏造或者歪曲事实，散布谣言，扰乱社会秩序的；<br>
            　（六）宣扬封建迷信、淫秽、色情、赌博、暴力、凶杀、恐怖、教唆犯罪的；<br>
            　（七）公然侮辱他人或者捏造事实诽谤他人的，或者进行其他恶意攻击的；<br>
            　（八）损害国家机关信誉的；<br>
            　（九）其他违反宪法和法律行政法规的；<br>
            　（十）进行商业广告行为的。<br>
            <br>
            二、互相尊重，对自己的言论和行为负责。<br>
            三、禁止在申请用户时使用相关本站的词汇，或是带有侮辱、毁谤、造谣类的或是有其含义的各种语言进行注册用户，否则我们会将其删除。<br>
            四、禁止以任何方式对本站进行各种破坏行为。<br>
            五、如果您有违反国家相关法律法规的行为，本站概不负责，您的登录信息均被记录无疑，必要时，我们会向相关的国家管理部门提供此类信息。</div>
    </div>
</div>

<!--
===========================================================
END PAGE
===========================================================
-->


</body>
</html>
@include('js_inc')
