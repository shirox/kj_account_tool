{% extends "layout.volt" %}

{% block content %}

<table class="table">

  <tr>
    <th>分類番号</th>
    <td>{{ category.id }}</td>
  </tr>
  <tr>
    <th>勘定科目名称</th>
    <td>{{ category.name }}</td>
  </tr>
  <tr>
    <th>表示優先度</th>
    <td>{{ category.order_num }}</td>
  </tr>
  <tr>
    <th>項目操作</th>
    <td>
      <input type="submit" value="変更する">
      <input type="submit" value="削除する">
    </td>
  </tr>

</table>

{% endblock %}