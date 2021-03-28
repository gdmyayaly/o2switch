import { Component, OnInit } from '@angular/core';
import { AdminService } from '../service/admin.service';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss']
})
export class HomeComponent implements OnInit {

  constructor(private admin:AdminService) { }

  ngOnInit() {
  }
  getData(){
    this.admin.get().subscribe(
      res=>{
        console.log(res);
      },
      error=>{
        console.log(error);
        
      }
    )
  }
  postData(){
    this.admin.post().subscribe(
      res=>{
        console.log(res);
      },
      error=>{
        console.log(error);
        
      }
    )
  }
  putData(){
    this.admin.put().subscribe(
      res=>{
        console.log(res);
      },
      error=>{
        console.log(error);
        
      }
    )
  }
}
