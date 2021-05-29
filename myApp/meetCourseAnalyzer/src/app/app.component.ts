import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'meetCourseAnalyzer';
  opened = false;
  // tslint:disable-next-line:ban-types
  myimage1: string = 'assets/images/distance.png';
  // tslint:disable-next-line:typedef
  ouvrirBarre() {
    this.opened = !this.opened;
  }
}
