{% extends "layout.volt" %}

{% block content %}

<h1>{{ billListData.listName }}</h1>

<table class="table table-bordered">

  <tr>
    <th style="border-top-style:hidden;border-bottom-style:hidden;border-left-style:hidden;"></th>
    <th class="text-center col-sm-1">貸方</th>
    <th class="text-center col-sm-1">勘定科目</th>
    <th class="text-center col-sm-1">借方</th>
    <th style="border-top-style:hidden;border-bottom-style:hidden;border-right-style:hidden;"></th>
  </tr>

  {% for bill in billData %}
  <tr>
    <td class="text-right" style="border-bottom-style:hidden;border-left-style:hidden;">
    	<form class="form-inline" action="/bill/append" method="post">
	<input type="hidden" name="listId" value="{{ billListData.listId }}">
	<input type="hidden" name="categoryId" value="{{ bill.category_id }}">
	<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-share"></span> 更新</button>
    	<input class="form-control input-sm" type="text" name="leftAmount">
	</form>
    </td>
    <td class="text-right col-md-1">{{ number_format(bill.sum_left_amount) }}</td>
    <td class="text-center col-md-2">{{ bill.category_name }}</td>
    <td class="text-right col-md-1">{{ number_format(bill.sum_right_amount) }}</td>
    <td class="text-left" style="border-bottom-style:hidden;border-right-style:hidden;">
    	<form class="form-inline" action="/bill/append" method="post">
	<input type="hidden" name="listId" value="{{ billListData.listId }}">
	<input type="hidden" name="categoryId" value="{{ bill.category_id }}">
    	<input class="form-control input-sm" type="text" name="rightAmount">
	<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-share"></span> 更新</button>
	</form>
    </td>
  </tr>

  {% endfor %}

  <tr>
    <td style="border-bottom-style:hidden;border-left-style:hidden;"></td>
    <td class="text-right">{{ number_format(billLeftTotal) }}</td>
    <td class="text-center">合計</td>
    <td class="text-right">{{ number_format(billRightTotal) }}</td>
    <td style="border-bottom-style:hidden;border-right-style:hidden;"></td>
  </tr>

</table>

{% endblock %}