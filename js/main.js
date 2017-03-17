$(function(){

role=$("#roles").val();
    if (role=="super"){
      $(".tools").show();
      $(".del").show();
      $(".admin").show();


    }
h=$(".portlet-body").height();
      if (h<600){
        $(".portlet-body form").height("600px");
      }else{
  $(".portlet-body form").attr("height","3600px");
      }

});


//function Extends(){
//  $(".conts").prepend("<div class='form-group extend'><div class='col-md-6'><div class='noUi-control noUi-success' id='slider_0'><input type='text' class='form-control comment' placeholder='描述'></div></div><div class='col-md-5'><div class='noUi-control noUi-success' id='slider_0'> <input type='text' class='form-control url'  placeholder='Url地址'></div></div><div class='col-md-1'><div class='noUi-control noUi-success' id='slider_0'><button type='button' class='btn btn-primary' onclick='add(this)'>SUBMIT</button></div></div></div>");
//}
function reduce(){
   $(".extend:first-child").remove();
}
function add(){
    //comment=$(ev).parent().parent().parent().find(".comment").val();
    //url=$(ev).parent().parent().parent().find(".url").val();
    comment = $("#desc").val();
    purl = $("#purl").val();
    murl = $("#murl").val();
    serv=$("#item").text();

if( comment == "" || murl == "" || purl == ""){
alert("不能为空");
exit;
}
               $.post("submit.php", {
                "opt":"add",
                "url":purl,
                "murl":murl,
                "comment":comment,
                "serv":serv,
                }, function (data) {
                  var dataO = jQuery.parseJSON(data);
                  if(dataO['code']==true){
    $("#desc").val('');
    $("#purl").val('');
    $("#murl").val('');
      alert("成功");
      $("#count").html(dataO['num']);
                  }else{
                  alert("项目重复或配置有问题");
                }
    }, "text");
}

function check_port(){
  url = $("#purl").val();
         $.post("submit.php", {
                "opt":"check_port",
                "url":url,
                }, function (data) {
                  var dataO = jQuery.parseJSON(data);
                  if(dataO['code']=="2"){
     alert("PROXY URL重复");
     $("#purl").val('');
     $("#purl").focus();
                  }else if(dataO['code']=="3"){
                  $("#purl").val('端口被占用');
                  $("#purl").focus();
                }
    }, "text");
}



function del(ev){
  serv=$("#item").text();
  item=$(ev).parent().parent().parent().attr("vl");
  if(confirm("确认删除?")){
     $.post("submit.php", {
                "opt":"del",
                "item":item,
                "serv":serv,
                }, function (data) {
var dataO = jQuery.parseJSON(data);
  $(ev).parent().parent().parent().remove();
  $("#count").html(dataO['num']);

    }, "text");
   }
}
function adduser(){
  name=$("#user").val();
  if (name==""){
    alert("用户名不能为空");

  }
     $.post("submit.php", {
                "opt":"adduser",
                "user":name,
                }, function (data) {
                  if (data==true){
 $(".userconts").prepend("<div class='form-group' ><div class='col-md-11'><div class='noUi-control noUi-success' id='slider_0'><h3><span class='label label-danger'>"+name+"</span></h3></div></div><div class='col-md-1 del' ><div class='noUi-control noUi-success' id='slider_1' ><i class='fa fa-remove' onclick='deluser(this)' style='color:gray;margin-left:60px;cursor:pointer;'></i></div></div></div>");
}else{
alert("用户名重复");
}
    }, "text");
}

function deluser(ev){
 name = $(ev).parent().parent().parent().find('.label-danger').text();
$.post("submit.php", {
                "opt":"deluser",
                "user":name,
                }, function (data) {

$(ev).parent().parent().parent().remove();

    }, "text");
}

function additem(){
  item=$("#item").val();
  comment=$("#item").val();
  if (item==""){
    alert("项目名不能为空");

  }
     $.post("submit.php", {
                "opt":"additem",
                "item":item,
                "comment":comment,
                }, function (data) {
if (data==true){
 $(".conts").prepend("<div class='form-group' ><div class='col-md-4'><div class='noUi-control noUi-success' id='slider_0'><span class='label label-primary'>"+item+"</span></div></div><div class='col-md-7'><div class='noUi-control noUi-success' id='slider_0'><span class='label label-danger'>"+comment+"</span></div></div><div class='col-md-1 del' ><div class='noUi-control noUi-success' id='slider_1' ><i class='fa fa-remove'  style='color:gray;margin-left:60px;cursor:pointer;'></i></div></div></div>");
}else{
alert("项目重复");
}


    }, "text");
}

function delitem(ev){
 item = $(ev).parent().parent().parent().find('.label-primary').text();
$.post("submit.php", {
                "opt":"delitem",
                "item":item,
                }, function (data) {

$(ev).parent().parent().parent().remove();

    }, "text");
}

function change(){
    $("#murl").val("http://");
    $("#purl").val('https://platform.op.easemob.com:');
}

function edit(ev,items,url,comment){
    $("#desc").val(comment);
    $("#purl").val(url);
   //item=$(ev).parent().parent().parent().attr("vl");
   //desc=$(ev).parent().parent().parent().find(".desc").text();
  // $(ev).parent().parent().parent().html("<div class='col-md-3'><input type='text' value="+desc+" class='form-control edit_desc'></div><div class='col-md-4'><input type='text' value="+url+" class='form-control edit_url'></div><div ><button type='button' onclick='edititem(this,"+items+")' class='btn btn-primary'>SUBMIT</button><button type='button' class='btn btn-default' onclick=recover()>CANCEL</button></div>");

}

function recover(){
location.reload();
// $(ev).parent().parent().html("<div class='col-md-10'><div class='noUi-control noUi-success' id='slider_0'><a  class='desc' href='"+url+"'>"+desc+"</a></div></div><div class='col-md-2 del' ><div class='noUi-control noUi-success' id='slider_1'><a class='btn btn-circle btn-icon-only btn-default' href='#' onclick='del(this)' style='margin-left: 80px'><i class='icon-trash'></i></a><a class='btn btn-circle btn-icon-only btn-default' href='#' onclick=edit(this,'"+items+"','"+url+"','"+desc+"')><i class='icon-wrench'></i></a></div></div>");
}

function edititem(ev,item){
    //alert(item);
    desc=$(ev).parent().parent().find(".edit_desc").val();
    url=$(ev).parent().parent().find(".edit_url").val();
    $.post("submit.php", {
                "opt":"edititem",
                "item":item,
                "url":url,
                "desc":desc,
                }, function (data) {
if (data==true){
$(ev).parent().parent().html("<div class='col-md-10'><div class='noUi-control noUi-success' id='slider_0'> <span class='desc label label-success' style='cursor:pointer;'  hr='"+url+"'   data-toggle='modal' data-target='#myModal' onmouseover='urls(this)'>"+desc+"</span></div></div><div class='col-md-2 del' ><div class='noUi-control noUi-success' id='slider_1'><a class='btn btn-circle btn-icon-only btn-default' href='#' onclick='del(this)' style='margin-left: 20px'><i class='icon-trash'></i></a><a class='btn btn-circle btn-icon-only btn-default' href='#' onclick=edit(this,'"+item+"','"+url+"','"+desc+"')><i class='icon-wrench'></i></a></div></div>");
}else{
  alert("项目重复");
}
    }, "text");
}


function urls(ev){
  hr=$(ev).attr("hr");
  //alert(hr);
  $("#ifr").attr("src",hr);
}

function checkiframe(ev){
    var isOnLoad = true;
$("#ifr").hide();
$(".modal-body").prepend("<img src='../images/timg.jpg' style='margin-left:350px'  />");
 //$(".modal-body").prepend("<div  class='progress'><div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='80' aria-valuemin='0' aria-valuemax='0' style'width: 80%'><span class='sr-only'>80% Complete (danger)</span></div></div>");

      hr=$(ev).attr("hr");
  $("#ifr").attr("src",hr);
  $("#ifr").load(function() {
isOnLoad = false;// 加载完成
$("img").remove();
//$(".progress").remove();
$("#ifr").show();
});
   $("#hh").hide();
}

function addgroup(){
  group=$("#groupname").val();
  url=$("#url").val();
  user=$("#username").val();
  if( group ==""){
  alert("组名不能为空");
  return false;
}
 if( user ==""){
  alert("用户名不能为空");
  return false;
}

               $.post("submit.php", {
                "opt":"addgroup",
                "url":url,
                "user":user,
                "group":group,
                }, function (data) {

                  if(data==true){

  location.reload();

                }

    }, "text");
}

function removegroup(group){
    if(confirm("确认删除?")){
     $.post("submit.php", {
                "opt":"removegroup",
                "group":group,
                }, function (data) {
 if(data==true){

  location.reload();

                }

    }, "text");
   }
}


function ch_group(group,username,url){

$(".chmodal-title").text(group);


               $.post("submit.php", {
                "opt":"chgroup",
                "url":url,
                "user":username,
                "group":group,
                }, function (msg) {

             $("#ch_contents").html(msg);

    }, "text");
}



function ghgroup(){
  str="";
  strs="";
  $("div.ms-selection").eq(0).find("li.ms-selected").each(function(index,ev){
    str+=$(ev).text()+" ";
  });

  $("div.ms-selection").eq(1).find("li.ms-selected").each(function(index,ev){
    strs+=$(ev).text()+" ";
  });
  $.post("submit.php", {
                "opt":"update_group",
                "user":str,
                "url":strs,
                "group":$(".chmodal-title").text(),
                }, function (data) {

             if(data==true){

  location.reload();

                }

    }, "text");
}

