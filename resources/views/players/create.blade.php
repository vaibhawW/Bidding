<!doctype html>
<html lang="en">
<head>
    <title>Create Players</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset("css/app.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/font-awesome.min.css")}}">
    <style>
        iframe { display: block; margin: 25px auto; }

        .jq-toast-wrap,.jq-toast-wrap *{margin:0;padding:0}.jq-toast-wrap{display:block;position:fixed;width:250px;pointer-events:none!important;letter-spacing:normal;z-index:9000!important}.jq-toast-wrap.bottom-left{bottom:20px;left:20px}.jq-toast-wrap.bottom-right{bottom:20px;right:40px}.jq-toast-wrap.top-left{top:20px;left:20px}.jq-toast-wrap.top-right{top:20px;right:40px}.jq-toast-single{display:block;width:100%;padding:10px;margin:0 0 5px;border-radius:4px;font-size:12px;font-family:arial,sans-serif;line-height:17px;position:relative;pointer-events:all!important;background-color:#444;color:#fff}.jq-toast-single h2{font-family:arial,sans-serif;font-size:14px;margin:0 0 7px;background:0 0;color:inherit;line-height:inherit;letter-spacing:normal}.jq-toast-single a{color:#eee;text-decoration:none;font-weight:700;border-bottom:1px solid #fff;padding-bottom:3px;font-size:12px}.jq-toast-single ul{margin:0 0 0 15px;background:0 0;padding:0}.jq-toast-single ul li{list-style-type:disc!important;line-height:17px;background:0 0;margin:0;padding:0;letter-spacing:normal}.close-jq-toast-single{position:absolute;top:3px;right:7px;font-size:14px;cursor:pointer}.jq-toast-loader{display:block;position:absolute;top:-2px;height:5px;width:0;left:0;border-radius:5px;background:red}.jq-toast-loaded{width:100%}.jq-has-icon{padding:10px 10px 10px 50px;background-repeat:no-repeat;background-position:10px}.jq-icon-info{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGwSURBVEhLtZa9SgNBEMc9sUxxRcoUKSzSWIhXpFMhhYWFhaBg4yPYiWCXZxBLERsLRS3EQkEfwCKdjWJAwSKCgoKCcudv4O5YLrt7EzgXhiU3/4+b2ckmwVjJSpKkQ6wAi4gwhT+z3wRBcEz0yjSseUTrcRyfsHsXmD0AmbHOC9Ii8VImnuXBPglHpQ5wwSVM7sNnTG7Za4JwDdCjxyAiH3nyA2mtaTJufiDZ5dCaqlItILh1NHatfN5skvjx9Z38m69CgzuXmZgVrPIGE763Jx9qKsRozWYw6xOHdER+nn2KkO+Bb+UV5CBN6WC6QtBgbRVozrahAbmm6HtUsgtPC19tFdxXZYBOfkbmFJ1VaHA1VAHjd0pp70oTZzvR+EVrx2Ygfdsq6eu55BHYR8hlcki+n+kERUFG8BrA0BwjeAv2M8WLQBtcy+SD6fNsmnB3AlBLrgTtVW1c2QN4bVWLATaIS60J2Du5y1TiJgjSBvFVZgTmwCU+dAZFoPxGEEs8nyHC9Bwe2GvEJv2WXZb0vjdyFT4Cxk3e/kIqlOGoVLwwPevpYHT+00T+hWwXDf4AJAOUqWcDhbwAAAAASUVORK5CYII=);background-color:#31708f;color:#d9edf7;border-color:#bce8f1}.jq-icon-warning{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGYSURBVEhL5ZSvTsNQFMbXZGICMYGYmJhAQIJAICYQPAACiSDB8AiICQQJT4CqQEwgJvYASAQCiZiYmJhAIBATCARJy+9rTsldd8sKu1M0+dLb057v6/lbq/2rK0mS/TRNj9cWNAKPYIJII7gIxCcQ51cvqID+GIEX8ASG4B1bK5gIZFeQfoJdEXOfgX4QAQg7kH2A65yQ87lyxb27sggkAzAuFhbbg1K2kgCkB1bVwyIR9m2L7PRPIhDUIXgGtyKw575yz3lTNs6X4JXnjV+LKM/m3MydnTbtOKIjtz6VhCBq4vSm3ncdrD2lk0VgUXSVKjVDJXJzijW1RQdsU7F77He8u68koNZTz8Oz5yGa6J3H3lZ0xYgXBK2QymlWWA+RWnYhskLBv2vmE+hBMCtbA7KX5drWyRT/2JsqZ2IvfB9Y4bWDNMFbJRFmC9E74SoS0CqulwjkC0+5bpcV1CZ8NMej4pjy0U+doDQsGyo1hzVJttIjhQ7GnBtRFN1UarUlH8F3xict+HY07rEzoUGPlWcjRFRr4/gChZgc3ZL2d8oAAAAASUVORK5CYII=);background-color:#8a6d3b;color:#fcf8e3;border-color:#faebcc}.jq-icon-error{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHOSURBVEhLrZa/SgNBEMZzh0WKCClSCKaIYOED+AAKeQQLG8HWztLCImBrYadgIdY+gIKNYkBFSwu7CAoqCgkkoGBI/E28PdbLZmeDLgzZzcx83/zZ2SSXC1j9fr+I1Hq93g2yxH4iwM1vkoBWAdxCmpzTxfkN2RcyZNaHFIkSo10+8kgxkXIURV5HGxTmFuc75B2RfQkpxHG8aAgaAFa0tAHqYFfQ7Iwe2yhODk8+J4C7yAoRTWI3w/4klGRgR4lO7Rpn9+gvMyWp+uxFh8+H+ARlgN1nJuJuQAYvNkEnwGFck18Er4q3egEc/oO+mhLdKgRyhdNFiacC0rlOCbhNVz4H9FnAYgDBvU3QIioZlJFLJtsoHYRDfiZoUyIxqCtRpVlANq0EU4dApjrtgezPFad5S19Wgjkc0hNVnuF4HjVA6C7QrSIbylB+oZe3aHgBsqlNqKYH48jXyJKMuAbiyVJ8KzaB3eRc0pg9VwQ4niFryI68qiOi3AbjwdsfnAtk0bCjTLJKr6mrD9g8iq/S/B81hguOMlQTnVyG40wAcjnmgsCNESDrjme7wfftP4P7SP4N3CJZdvzoNyGq2c/HWOXJGsvVg+RA/k2MC/wN6I2YA2Pt8GkAAAAASUVORK5CYII=);background-color:#a94442;color:#f2dede;border-color:#ebccd1}.jq-icon-success{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADsSURBVEhLY2AYBfQMgf///3P8+/evAIgvA/FsIF+BavYDDWMBGroaSMMBiE8VC7AZDrIFaMFnii3AZTjUgsUUWUDA8OdAH6iQbQEhw4HyGsPEcKBXBIC4ARhex4G4BsjmweU1soIFaGg/WtoFZRIZdEvIMhxkCCjXIVsATV6gFGACs4Rsw0EGgIIH3QJYJgHSARQZDrWAB+jawzgs+Q2UO49D7jnRSRGoEFRILcdmEMWGI0cm0JJ2QpYA1RDvcmzJEWhABhD/pqrL0S0CWuABKgnRki9lLseS7g2AlqwHWQSKH4oKLrILpRGhEQCw2LiRUIa4lwAAAABJRU5ErkJggg==);color:#dff0d8;background-color:#3c763d;border-color:#d6e9c6}

        * { font-family: 'Roboto Slab', serif; margin: 0; padding: 0; }
        hr { border: 1px solid #ccc; margin-bottom: 20px; }
        h1, h2 { margin: 20px 0 10px; }
        a { text-decoration: none;}
        .container { display: block; width: 1200px; margin: auto; }
        strong { padding-bottom: 1px; border-bottom: 1px dotted; }
        p { margin: 10px 0; }
        code { font-family: monospace; color: #2d2d2d; background: whitesmoke; display: block; padding: 10px; border: 1px solid #ccc; overflow: scroll;}
        a.eval-js { color: whitesmoke; padding: 5px 10px; display: inline-block; margin-bottom: 10px; background: #2d2d2d; border-radius: 2px; }
        span.muted { font-size: 17px; color: #8B7373; }
        span.code { font-family: monospace; color: #2d2d2d; background: whitesmoke; padding: 5px; border: 1px solid #ccc; }
        div.code-runner { margin: 20px 20px;}
        ul, ol { margin: 10px 50px; }
        ul li { margin-bottom: 10px; }
        .hidden { display: none; }
        span.k { display: inline-block; width: 175px; }
        span.c { color: #F7BCBC; padding-left: 30px; }
        .plugin-options label { display: inline-block; width: 265px; }
        span.toast-position span.k { display: inline; }
        .toast-index .muted { display: block; color: #AD9D9D; }
        .toast-index .muted:hover { color: #333; }
        .latest-update { padding: 0 30px; border: 1px dashed; margin: 30px 0; box-sizing: border-box; }
    </style>
</head>
<body class="bg-light">
<div class="container p-5">

    <form action="{{isset($player)?route('player.update',['id'=>$player->id]):route('player.store')}}" method='{{isset($player)?"PUT":"POST"}}'>
        {{csrf_field()}}
        @if(isset($player))
            <input type="hidden" value="{{$player->id}}" name="id">
        @endif
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">Player Name</span>
            </div>
            <input type="text" class="form-control" name="name" id="basic-url" aria-describedby="basic-addon3" value="{{$player->name or ""}}" autofocus>
        </div>
        <label for="details">Description Of Player</label>
        <textarea placeholder="Description of Player" name="details">{{$player->details or ""}}</textarea>
        <input type="submit" class="btn btn-success mt-1 right" value="{{isset($player)?'Update Player':'Add Player'}}">
    </form>
</div>
<footer class="fixed-bottom bg-dark p-2 text-white d-flex flex-row">
    <div class="w-50">
        &copy; {{date('Y')}} Hostel 4
    </div>
    <div class="w-50 text-right">
        Bidding Portal
    </div>
</footer>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.css"></script>
<script src="https://cdn.ckeditor.com/4.9.0/standard/ckeditor.js"></script>
<script>
    "function"!==typeof Object.create&&(Object.create=function(t){function o(){}return o.prototype=t,new o}),function(t, o){"use strict";var i={_positionClasses:["bottom-left","bottom-right","top-right","top-left","bottom-center","top-center","mid-center"],_defaultIcons:["success","error","info","warning"],init:function(o){this.prepareOptions(o,t.toast.options),this.process()},prepareOptions:function(o, i){var s={};"string"===typeof o||o instanceof Array?s.text=o:s=o,this.options=t.extend({},i,s)},process:function(){this.setup(),this.addToDom(),this.position(),this.bindToast(),this.animate()},setup:function(){var o="";if(this._toastEl=this._toastEl||t("<div></div>",{"class":"jq-toast-single"}),o+='<span class="jq-toast-loader"></span>',this.options.allowToastClose&&(o+='<span class="close-jq-toast-single">&times;</span>'),this.options.text instanceof Array){this.options.heading&&(o+='<h2 class="jq-toast-heading">'+this.options.heading+"</h2>"),o+='<ul class="jq-toast-ul">';for(var i=0;i<this.options.text.length;i++)o+='<li class="jq-toast-li" id="jq-toast-item-'+i+'">'+this.options.text[i]+"</li>";o+="</ul>"}else this.options.heading&&(o+='<h2 class="jq-toast-heading">'+this.options.heading+"</h2>"),o+=this.options.text;this._toastEl.html(o),this.options.bgColor!==!1&&this._toastEl.css("background-color",this.options.bgColor),this.options.textColor!==!1&&this._toastEl.css("color",this.options.textColor),this.options.textAlign&&this._toastEl.css("text-align",this.options.textAlign),this.options.icon!==!1&&(this._toastEl.addClass("jq-has-icon"),-1!==t.inArray(this.options.icon,this._defaultIcons)&&this._toastEl.addClass("jq-icon-"+this.options.icon))},position:function(){"string"===typeof this.options.position&&-1!==t.inArray(this.options.position,this._positionClasses)?"bottom-center"===this.options.position?this._container.css({left:t(o).outerWidth()/2-this._container.outerWidth()/2,bottom:20}):"top-center"===this.options.position?this._container.css({left:t(o).outerWidth()/2-this._container.outerWidth()/2,top:20}):"mid-center"===this.options.position?this._container.css({left:t(o).outerWidth()/2-this._container.outerWidth()/2,top:t(o).outerHeight()/2-this._container.outerHeight()/2}):this._container.addClass(this.options.position):"object"===typeof this.options.position?this._container.css({top:this.options.position.top?this.options.position.top:"auto",bottom:this.options.position.bottom?this.options.position.bottom:"auto",left:this.options.position.left?this.options.position.left:"auto",right:this.options.position.right?this.options.position.right:"auto"}):this._container.addClass("bottom-left")},bindToast:function(){var t=this;this._toastEl.on("afterShown",function(){t.processLoader()}),this._toastEl.find(".close-jq-toast-single").on("click",function(o){o.preventDefault(),"fade"===t.options.showHideTransition?(t._toastEl.trigger("beforeHide"),t._toastEl.fadeOut(function(){t._toastEl.trigger("afterHidden")})):"slide"===t.options.showHideTransition?(t._toastEl.trigger("beforeHide"),t._toastEl.slideUp(function(){t._toastEl.trigger("afterHidden")})):(t._toastEl.trigger("beforeHide"),t._toastEl.hide(function(){t._toastEl.trigger("afterHidden")}))}),"function"===typeof this.options.beforeShow&&this._toastEl.on("beforeShow",function(){t.options.beforeShow()}),"function"===typeof this.options.afterShown&&this._toastEl.on("afterShown",function(){t.options.afterShown()}),
    "function"===typeof this.options.beforeHide&&this._toastEl.on("beforeHide",function(){t.options.beforeHide()}),"function"===typeof this.options.afterHidden&&this._toastEl.on("afterHidden",function(){t.options.afterHidden()})},addToDom:function(){var o=t(".jq-toast-wrap");if(0===o.length?(o=t("<div></div>",{"class":"jq-toast-wrap"}),t("body").append(o)):(!this.options.stack||isNaN(parseInt(this.options.stack,10)))&&o.empty(),o.find(".jq-toast-single:hidden").remove(),o.append(this._toastEl),this.options.stack&&!isNaN(parseInt(this.options.stack),10)){var i=o.find(".jq-toast-single").length,s=i-this.options.stack;s>0&&t(".jq-toast-wrap").find(".jq-toast-single").slice(0,s).remove()}this._container=o},canAutoHide:function(){return this.options.hideAfter!==!1&&!isNaN(parseInt(this.options.hideAfter,10))},processLoader:function(){if(!this.canAutoHide()||this.options.loader===!1)return!1;var t=this._toastEl.find(".jq-toast-loader"),o=(this.options.hideAfter-400)/1e3+"s",i=this.options.loaderBg,s=t.attr("style")||"";s=s.substring(0,s.indexOf("-webkit-transition")),s+="-webkit-transition: width "+o+" ease-in;                       -o-transition: width "+o+" ease-in;                       transition: width "+o+" ease-in;                       background-color: "+i+";",t.attr("style",s).addClass("jq-toast-loaded")},animate:function(){var t=this;if(this._toastEl.hide(),this._toastEl.trigger("beforeShow"),"fade"===this.options.showHideTransition.toLowerCase()?this._toastEl.fadeIn(function(){t._toastEl.trigger("afterShown")}):"slide"===this.options.showHideTransition.toLowerCase()?this._toastEl.slideDown(function(){t._toastEl.trigger("afterShown")}):this._toastEl.show(function(){t._toastEl.trigger("afterShown")}),this.canAutoHide()){var t=this;o.setTimeout(function(){"fade"===t.options.showHideTransition.toLowerCase()?(t._toastEl.trigger("beforeHide"),t._toastEl.fadeOut(function(){t._toastEl.trigger("afterHidden")})):"slide"===t.options.showHideTransition.toLowerCase()?(t._toastEl.trigger("beforeHide"),t._toastEl.slideUp(function(){t._toastEl.trigger("afterHidden")})):(t._toastEl.trigger("beforeHide"),t._toastEl.hide(function(){t._toastEl.trigger("afterHidden")}))},this.options.hideAfter)}},reset:function(o){"all"===o?t(".jq-toast-wrap").remove():this._toastEl.remove()},update:function(t){this.prepareOptions(t,this.options),this.setup(),this.bindToast()}};t.toast=function(t){var o=Object.create(i);return o.init(t,this),{reset:function(t){o.reset(t)},update:function(t){o.update(t)}}},t.toast.options={text:"",heading:"",showHideTransition:"fade",allowToastClose:!0,hideAfter:3e3,loader:!0,loaderBg:"#9EC600",stack:5,position:"bottom-left",bgColor:!1,textColor:!1,textAlign:"left",icon:!1,beforeShow:function(){},afterShown:function(){},beforeHide:function(){},afterHidden:function(){}}}(jQuery,window,document);
</script>
<script>
    CKEDITOR.replace( 'details' );
    @if(isset($saved))
    $.toast({
        heading: 'Success',
        text: 'New Player Saved',
        showHideTransition: 'slide',
        position: 'top-right',
        icon: 'success'
    });
    @elseif(isset($updated))
    $.toast({
        heading: 'Success',
        text: "Player's details Updated",
        showHideTransition: 'slide',
        position: 'top-right',
        icon: 'success'
    });
    @endif
</script>
</body>
</html>