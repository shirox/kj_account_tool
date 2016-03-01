{% extends "layout.volt" %}

{% block content %}

<a href="javascript:history.back()">
  <span class="glyphicon glyphicon-remove-circle remove-icon"></span>
</a>

<form class="form-horizontal" action="/category/appendnew" method="post">
  <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">勘定科目名称</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputName" name="categoryName" placeholder="勘定科目名を入力してください">
    </div>
  </div>
  <div class="form-group">
    <label for="inputOrderNum" class="col-sm-2 control-label">表示優先度</label>
    <div class="col-sm-2">
      <input type="number" class="form-control" id="inputOrderNum" name="categoryOrderNum" placeholder="1" value="1">
    </div>
  </div>
  <div class="form-group">
    <label for="inputStatus" class="col-sm-2 control-label">表示</label>
    <div class="col-sm-2">
      <select class="form-control" name="categoryStatus">
        <option value="1">表示</option>
        <option value="0">非表示</option>
     </select>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-4">
      <button type="submit" class="btn btn-primary">保存</button>
    </div>
  </div>
</form>

{% endblock %}