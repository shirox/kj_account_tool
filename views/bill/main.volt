{% extends "layout.volt" %}

{% block content %}

<table class="small-cell">

  <tr>
    <th class="text-center">貸方</th>
    <th class="text-center">勘定科目</th>
    <th class="text-center">借方</th>
  </tr>

  <tr>
    <td class="text-right">
        <input class="form-control input-sm {{ isRed }}" type="text" value="{{ number_format(billLeftTotal) }}" style="text-align:right">
    </td>
    <td class="text-center">合計</td>
    <td class="text-right">
        <input class="form-control input-sm {{ isRed }}" type="text" value="{{ number_format(billRightTotal) }}" style="text-align:right">
    </td>
  </tr>

  {% for bill in billData %}
  <tr>
    <td class="text-right" style="border-bottom-style:hidden;border-left-style:hidden;">
    	<form class="form-inline" action="/bill/append" method="post">
	<input type="hidden" name="listId" value="{{ billListData.listId }}">
	<input type="hidden" name="categoryId" value="{{ bill.category_id }}">
	<input class="form-control input-sm" type="text" name="leftAmount" placeholder="{{ number_format(bill.sum_left_amount) }}" style="text-align:right">
	</form>
    </td>
    <td class="text-center">{{ bill.category_name }}</td>
    <td class="text-left" style="border-bottom-style:hidden;border-right-style:hidden;">
    	<form class="form-inline" action="/bill/append" method="post">
	<input type="hidden" name="listId" value="{{ billListData.listId }}">
	<input type="hidden" name="categoryId" value="{{ bill.category_id }}">
	<input class="form-control input-sm" type="text" name="rightAmount" placeholder="{{ number_format(bill.sum_right_amount) }}" style="text-align:right">
	</form>
    </td>
  </tr>

  {% endfor %}

</table>

<h1>{{ billListData.listName }}</h1>

{% endblock %}
