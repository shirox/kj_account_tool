{% extends "layout.volt" %}

{% block content %}

<a href="javascript:history.back()">
  <span class="glyphicon glyphicon-remove-circle remove-icon"></span>
</a>

<form class="form-horizontal" action="/bill/listUpdate" method="post">
  <input type="hidden" name="billListId" value="{{ billListData.id }}">
  <div class="form-group">
    <label for="inputBillListId" class="col-sm-2 control-label">リスト番号</label>
    <div class="col-sm-2">
      {{ billListData.id }}
    </div>
  </div>
  <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">名称</label>
    <div class="col-sm-4">
      <input type="text" name="listName" class="form-control" id="inputName" placeholder="リスト名称" value="{{ billListData.name }}">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-4">
      <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-saved"></span> 保存</button>
    </div>
  </div>
</form>

{% endblock %}