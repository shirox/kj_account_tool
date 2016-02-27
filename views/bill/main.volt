{% extends "layout.volt" %}

{% block content %}

<table class="table">

  <tr>
    <th></th>
    <th>貸方入力</th>
    <th>貸方</th>
    <th>勘定項目</th>
    <th>借方</th>
    <th>借方入力</th>
    <th></th>
  </tr>

  {% for bill in billData %}

  <tr>
    <td><a href="/bill/append"><span class="glyphicon glyphicon-share"></span>新規</a></td>
    <td><input type="number" name="leftAmount"></td>
    <td>{{ bill.left_amount }}</td>
    <td>{{ bill.name }}</td>
    <td>{{ bill.right_amount }}</td>
    <td><input type="number" name="rightAmount"></td>
    <td><a href="/bill/append"><span class="glyphicon glyphicon-share"></span>新規</a></td>
  </tr>

  {% endfor %}

</table>

{% endblock %}