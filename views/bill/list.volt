{% extends "layout.volt" %}

{% block content %}

<table class="table">

  <tr>
    <th>リスト番号</th>
    <th>名称</th>
    <th>更新時刻</th>
  </tr>

  {% for billListDetail in billList %}

  <tr>
    <td>{{ billListDetail.id }}</td>
    <td><a href="/bill/main/{{ billListDetail.id }}">{{ billListDetail.name }}</div></td>
    <td>{{ billListDetail.uptime }}</td>
  </tr>

  {% endfor %}

</table>

{% endblock %}