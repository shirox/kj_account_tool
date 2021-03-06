{% extends "layout.volt" %}

{% block content %}

<a href="javascript:history.back()">
  <span class="glyphicon glyphicon-remove-circle remove-icon"></span>
</a>

<form class="form-horizontal" action="/category/update" method="post">
  <input type="hidden" name="categoryId" value="{{ category.id }}">
  <div class="form-group">
    <label for="inputCategoryId" class="col-sm-2 control-label">分類番号</label>
    <div class="col-sm-2">
      {{ category.id }}
    </div>
  </div>
  <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">勘定科目名称</label>
    <div class="col-sm-4">
      <input type="text" name="categoryName" class="form-control" id="inputName" placeholder="勘定科目名称" value="{{ category.name }}">
    </div>
  </div>
  <div class="form-group">
    <label for="inputOrderNum" class="col-sm-2 control-label">表示優先度</label>
    <div class="col-sm-2">
      <input type="number" name="categoryOrderNum" class="form-control" id="inputOrderNum" placeholder="表示優先度" value="{{ category.order_num }}">
    </div>
  </div>
  <div class="form-group">
    <label for="inputOrderNum" class="col-sm-2 control-label">表示</label>
    <div class="col-sm-2">
      <select class="form-control" name="categoryStatus">
        <option value="1" {% if select == 1 %}selected{% endif %}>表示</option>
        <option value="0" {% if select == 0 %}selected{% endif %}>非表示</option>
     </select>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-4">
      <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-saved"></span> 保存</button>
    </div>
  </div>
</form>

{% endblock %}