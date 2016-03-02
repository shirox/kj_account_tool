{% extends "layout.volt" %}

{% block content %}

<table class="table">

  <tr>
    <th class="text-center">伝票番号</th>
    <th class="text-center">伝票一覧</th>
    <th class="text-center">勘定科目</th>
    <th class="text-center">貸方</th>
    <th class="text-center">借方</th>
    <th class="text-center">更新時刻</th>
    <th class="text-center"></th>
  </tr>

  {% for bill in billList %}

  <tr>
    <td class="text-right">{{ bill.id }}</td>
    <td class="text-right"><a href="/bill/main/{{ bill.list_id }}">{{ bill.list_name }}</a></td>
    <td class="text-center"><a href="/category/detail/{{ bill.category_id }}">{{ bill.category_name }}</td>
    <td class="text-right">{{ number_format(bill.left_amount) }}</td>
    <td class="text-right">{{ number_format(bill.right_amount) }}</td>
    <td class="text-center">{{ bill.uptime }}</td>
    <td class="text-right"><a href="/bill/delete/{{ bill.id }}"><span class="glyphicon glyphicon-trash"></span></a></td>
  </tr>

  {% endfor %}

</table>

{% endblock %}