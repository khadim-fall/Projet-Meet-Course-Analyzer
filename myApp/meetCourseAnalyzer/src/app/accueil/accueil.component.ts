import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-accueil',
  templateUrl: './accueil.component.html',
  styleUrls: ['./accueil.component.css']
})
export class AccueilComponent implements OnInit {
  // tslint:disable-next-line:ban-types
  myimage1: String = 'assets/images/distance.png';

  constructor() { }

  ngOnInit(): void {
  }

}
