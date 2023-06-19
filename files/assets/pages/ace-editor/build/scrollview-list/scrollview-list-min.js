/*
Copyright (c) 2010, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.com/yui/license.html
version: 3.4.0
build: nightly
*/
YUI.add("scrollview-list",function(a){var b=a.ClassNameManager.getClassName,d="scrollview",c=b(d,"list"),g=b(d,"item"),h="contentBox",e="rendered",i="renderUI",j="host";function f(){f.superclass.constructor.apply(this,arguments);}f.NAME="pluginList";f.NS="list";f.ATTRS={isAttached:{value:false,validator:a.Lang.isBoolean}};a.namespace("Plugin").ScrollViewList=a.extend(f,a.Plugin.Base,{initializer:function(){this._host=this.get(j);this.afterHostEvent("render",this._addClassesToList);},_addClassesToList:function(){if(!this.get("isAttached")){var l=this._host.get(h),m,k;if(l.hasChildNodes()){m=l.all("> ul");k=l.all("> ul > li");m.each(function(n){n.addClass(c);});k.each(function(n){n.addClass(g);});this.set("isAttached",true);this._host.syncUI();}}}});},"3.4.0",{requires:["plugin","classnamemanager"],skinnable:true});