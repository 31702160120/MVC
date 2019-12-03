<meta charset="utf-8" />

<style>a{text-decoration: none;display:block;width:60px;height:30px; float: left; line-height: 30px;color:#000000;border-radius:10px; margin-left:5px}</style>
		<table border="1" width="480px" cellpadding="5" cellspacing="0" align="center">
				<tr >
					<td  align="center" colspan="6" bgcolor="aqua">栏目管理</td>
				</tr>
				<tr align="center">
				<td>序号</td>
				<td>栏目号</td>
				<td>栏目名</td>
				<td>状态</td>
				<td>操作</td>
				</tr>
				<?php foreach($data as $value): ?>
				<tr align="center"><td><?=$value['id'];?></td>
				<td><?=$value['categoryId'];?></td>
				<td><?=$value['categoryName'];?></td>
				<td style="<?=$value['color1'];?>"><?=$value['status1'];?></td>
				<td> 
				<a href="javascript:void(0)" onclick="return del(<?=$value['id'];?>)"style="background-color: #00B3FF;">删除
				</a>
				<a href="index.php?m=Locolun&id=<?=$value['id'];?>" style="background-color:aquamarine" >修改</a>
				<a href="javascript:void(0)" onclick="return resetpwd(<?=$value['id'];?>)"
				 style="<?=$value['color2'];?>"><?=$value['status2'];?>
				</a>
				</td></tr>
				<?php endforeach ?>
				</table>

<script type="text/javascript">
	function del(id){
		if(confirm("您确定要删除栏目吗?")){
			location.href = "index.php?m=Logl_colun&a=deleteId&id="+id;
		}
	}

	function resetpwd(id){
		if(confirm("是否对栏目进行操作")){
			location.href = "index.php?m=Logl_colun&a=switch&id="+id;
		}
	}
</script>