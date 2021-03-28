import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class AdminService {
  private url:string="https://api.cultureteamgrow.com/api/"
  constructor(private http:HttpClient) { }
  get(){
    return this.http.get(this.url+'get');
  }
  post(){
    return this.http.post(this.url+'post',{});
  }
  put(){
    return this.http.put(this.url+'put',{});
  }
}
