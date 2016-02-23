<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>批量增加</title>
<link  rel="stylesheet" type="text/css" href="__PUBLIC__/Css/base.css"/>
<script type="text/javascript">
    var PUBLIC= "__PUBLIC__";
    var APP = "__APP__";
    var ROOT = "__ROOT__";
</script>
<script  type="text/javascript" src="__PUBLIC__/Js/jquery.js" charset="utf-8"></script>
<script  type="text/javascript" src="__PUBLIC__/Js/dml.js" charset="utf-8"></script>
</head>
<style>
    #add{
        margin:0 auto;
        width:800px;
        margin-top: 50px;
    }
    .mark{
        font-family:"宋体";
        font-size:15px;
        COLOR: #8080FF;
    }
    .btn{
        width:100%;
        text-align: center;
    }
   li{ list-style: none; } 
</style>
<script lang="javascript">
    rownum=1;
    function addrow(){
         rownum++;
         var btnid='btn'+rownum;
         //隐藏上面行最后的增加按钮
         for(j=1;j<rownum;j++){
            document.getElementById("btn"+j).style.display="none";
         }
         //var newrow = document.getElementById('addtab').insertRow();
         var tabObj=document.getElementById('addtab');
         var bodyObj = tabObj.tBodies[0];
         var newrow=document.createElement("tr");
         //zone
         //var newcel = newrow.insertCell();
         var newcel=document.createElement("td");
         var zone='<td><select name="zone">\
                <option value="idc2">IDC2</option>\
                <option value="idc3">IDC3</option>\
                <option value="idc4">IDC4</option>\
                <option value="idc5">IDC5</option>\
                <option value="db">DB</option>\
				<option value="api">API</option>\
                <option value="dangdang.com">DANGDANG.COM</option>\
            </select></td>';
         newcel.innerHTML =zone;
         newrow.appendChild(newcel);
         //host
         //var newcel = newrow.insertCell();
         var newcel=document.createElement("td");
         var host='<td><input type="text" name="host" value=""/></td>';
         newcel.innerHTML =host; 
         newrow.appendChild(newcel);
         //type
         //var newcel = newrow.insertCell();
         var newcel=document.createElement("td");
         var type='<td><select name="type">\
                <option value="A">A</option>\
                <option value="MX">MX</option>\
                <option value="CNAME">CNAME</option>\
                <option value="NS">NS</option>\
                <option value="SOA">SOA</option>\
                <option value="AAAA">AAAA</option>\
                <option value="PTR">PTR</option>\
            </select></td>';
         newcel.innerHTML =type; 
         newrow.appendChild(newcel);
         //data
         //var newcel = newrow.insertCell();
         var newcel=document.createElement("td");
         var data='<td><input type="text" name="data" value=""/></td>';
         newcel.innerHTML =data; 
         newrow.appendChild(newcel);
		 //level
         //var newcel = newrow.insertCell();
         var newcel=document.createElement("td");
         var level='<td><select name="level">\
                <option value="common">一般</option>\
                <option value="major">重要</option>\
            </select></td>';
         newcel.innerHTML =level; 
         newrow.appendChild(newcel);
         
         //增加按钮
         //var newcel = newrow.insertCell();
         var newcel=document.createElement("td");
         newcel.innerHTML ='<td><input type=\"button\" onclick=\"javascript:addrow();\" id=\"'+btnid+'\" class=\"addline\" /></td>';
         newrow.appendChild(newcel);
         bodyObj.appendChild(newrow);
         

    }
    
    function removerow(){
         //xxx.removeChild(obj) xxx是所删除节点的父节点
         //xxx.removeNode(true) xxx是所要删除的节点
         var o = document.getElementById('addtab');
         //alert(o.rows.length-1);
         if(o.rows.length>1){
            // var remdobj = o.firstChild.removeChild(o.rows(o.rows.length-1)); //此方法chrome 35版本不支持
            o.deleteRow(o.rows.length-1);
         }
         rownum--;
         document.getElementById("btn"+rownum).style.display="";
    }
</script>
<body>

<div id="add">
    <a id="back" href="__URL__"><img src="__PUBLIC__/Images/new/btn_return.png"/></a>
    <input type="button" name="delline"  class="delline" onclick="javascript:removerow();"/>
    <fieldset>
        <legend class="mark"><font face='Microsoft YaHei'>DNS Add</font></legend>
        <table id="addtab">
        <tr><th>zone</th><th>host</th><th>Type</th><th>IP</th><th>级别</th><th></th></tr>
        <tr>
            <td><select name="zone">
                <option value="idc2">IDC2</option>
                <option value="idc3">IDC3</option>
                <option value="idc4">IDC4</option>
                <option value="idc5">IDC5</option>
                <option value="db">DB</option>
				<option value="api">API</option>
                <option value="dangdang.com">DANGDANG.COM</option>
            </select></td>
            <td><input type="text" name="host" value=""/></td>
            <td><select name="type">
                <option value="A">A</option>
                <option value="MX">MX</option>
                <option value="CNAME">CNAME</option>
                <option value="NS">NS</option>
                <option value="SOA">SOA</option>
                <option value="AAAA">AAAA</option>
                <option value="PTR">PTR</option>
            </select></td>
            <td><input type="text" name="data" value=""/></td>
			<td><select name="level">
                <option value="common">一般</option>
                <option value="major">重要</option>
            </select></td>
            <td><input type="button" onclick="javascript:addrow();"  id="btn1" class="addline" />
        </tr>
        
        </table>
        <span class="btn">
        <input type="button" name="save" class="save" onclick="adding()"/>
        </span>
    </fieldset>
</div>
<div>
<p>
<pre>
	<br>
	哥们，本次更新多了一个级别，是对域名做两种分级，分为一般和重要，添加域名时，请根据实际情况添加。
	谢谢
</pre>
</p>
</div>
</body>
</html>