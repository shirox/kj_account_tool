{% extends "layout.volt" %}

{% block content %}

<table class="table">

  <tr>
    <th>分類番号</th>
    <th>勘定科目名称</th>
    <th>表示優先度</th>
    <th>項目操作</th>
  </tr>

  {% for category in categoryList %}

  <tr>
    <td>{{ category.id }}</td>
    <td>{{ category.name }}</td>
    <td>{{ category.order_num }}</td>
    <td>
      <a href="/category/detail/{{ category.id }}"><span class="glyphicon glyphicon-edit"></span> 編集</a>
    </td>
  </tr>

  {% endfor %}

  <tr>
    <td colspan="3"></td>
    <td>
      <a href="/category/append"><span class="glyphicon glyphicon-share"></span> 新規追加</a>
    </td>
  </tr>

</table>

{% endblock %}