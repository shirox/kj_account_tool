{% extends "layout.volt" %}

{% block content %}

<table class="table">

  <tr>
    <th class="col-sm-1">リスト番号</th>
    <th class="col-sm-4">名称</th>
    <th class="col-sm-2">作成日時</th>
    <th class="col-sm-1"></th>
  </tr>

  {% for billListDetail in billList %}

  <tr>
    <td>{{ billListDetail.id }}</td>
    <td><a href="/bill/main/{{ billListDetail.id }}">{{ billListDetail.name }}</div></td>
    <td>{{ billListDetail.uptime }}</td>
    <td><a href="/bill/listDetail/{{ billListDetail.id }}"><span class="glyphicon glyphicon-edit"></span> 編集</a></td>
  </tr>

  {% endfor %}

  <tr>
    <td colspan="3"></td>
    <td><a href="/bill/listAppend"><span class="glyphicon glyphicon-edit"></span> 新規</a></td>
  </tr>

</table>

{% endblock %}