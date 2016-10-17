@extends('layouts.master')

@section('content')
    <div class="panel panel-border panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Request Help from your family</h3>
        </div>
        <div class="panel-body">
            <p class="text-muted font-13 m-b-15 m-t-20">Number of Legs</p><br/>
            <div class="radio radio-info radio-inline">
                <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                <label for="inlineRadio1"> One leg </label>
            </div>
            <div class="radio radio-info radio-inline">
                <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                <label for="inlineRadio1"> Two legs </label>
            </div>
            <div class="radio radio-info radio-inline">
                <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                <label for="inlineRadio1"> Three legs </label>
            </div>
            <form class="form-horizontal m-t-20" action="index.html">
                <div class="form-group">
                    <div class="col-xs-12">
                        <textarea class="form-control" rows="5"></textarea>
                    </div>
                </div>

                <div class="form-group text-right m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-custom w-md waves-effect waves-light" type="submit">Submit Form
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @stop