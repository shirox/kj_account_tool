{% extends "layout.volt" %}
{% block content %}
<li>Category List</li>

<table border=1>
<tr><th>id</th><th>name</th><th>order_num</th></tr>

{% for category in categoryList %}

<tr><td>{{ category.id }}</td><td>{{ category.name }}</td><td>{{ category.order_num }}</td></tr>

{% endfor %}

</table>
{% endblock %}