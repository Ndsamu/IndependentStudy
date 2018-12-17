'use strict';function confirmClose(){if(arguments.length>0){for(var i=0;i<arguments.length;i++){this.forms_id.push(arguments[i]);}}}
confirmClose.prototype={prompt:'You have unsaved changes.',forms_id:[],forms:[],formSubmit:false,getCurrentForms:function(){var formsInPage=this.getForms();var f,e;var This=this;this.forms=[];for(var i=0;i<formsInPage.length;i++){f=formsInPage[i];var tmpForm=[];for(var j=0;j<f.elements.length;j++){e=this.getFormElementValue(f[j]);if(e!=undefined){tmpForm.push(e);}}
this.forms.push(tmpForm);chainHandler(f,'onsubmit',function(){This.formSubmit=true;});}},compareForms:function(){if(this.forms.length==0){return true;}
var formsInPage=this.getForms();var f,e,i,j;for(i=0;i<formsInPage.length;i++){f=formsInPage[i];var tmpForm=[];for(j=0;j<f.elements.length;j++){e=this.getFormElementValue(f[j]);if(e!=undefined){tmpForm.push(e);}}
for(j=0;j<this.forms[i].length;j++){if(this.forms[i][j]!=tmpForm[j]){return false;}}}
return true;},getForms:function(){if(!document.getElementsByTagName||!document.getElementById){return[];}
if(this.forms_id.length>0){var res=[];var f;for(var i=0;i<this.forms_id.length;i++){f=document.getElementById(this.forms_id[i]);if(f!=undefined){res.push(f);}}
return res;}else{return document.getElementsByTagName('form');}
return[];},getFormElementValue:function(e){if(e==undefined){return undefined;}
if(e.type!=undefined&&e.type=='button'){return undefined;}
if(e.classList.contains('meta-helper')||e.classList.contains('checkbox-helper')){return undefined;}
if(e.type!=undefined&&e.type=='radio'){return this.getFormRadioValue(e);}else if(e.type!=undefined&&e.type=='checkbox'){return this.getFormCheckValue(e);}else if(e.type!=undefined&&e.type=='password'){return null;}else if(e.value!=undefined){return e.value;}else{return null;}},getFormCheckValue:function(e){if(e.checked){return e.value;}
return null;},getFormRadioValue:function(e){for(var i=0;i<e.length;i++){if(e[i].checked){return e[i].value;}else{return null;}}
return null;}};var confirmClosePage=new confirmClose();chainHandler(window,'onload',function(){confirmClosePage.getCurrentForms();});chainHandler(window,'onbeforeunload',function(event_){if(event_==undefined&&window.event){event_=window.event;}
if(!confirmClosePage.formSubmit&&!confirmClosePage.compareForms()){event_.returnValue=confirmClosePage.prompt;return confirmClosePage.prompt;}
return false;});