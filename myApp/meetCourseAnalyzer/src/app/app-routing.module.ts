import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import {Module3Component} from './module3/module3.component';
import {Module1Component} from './module1/module1.component';
import {Module2Component} from './module2/module2.component';
import {AccueilComponent} from './accueil/accueil.component';

const routes: Routes = [{
  path: 'module1',
  component: Module1Component
}, {
  path: 'module2',
  component: Module2Component
}, {
  path: 'module3',
  component: Module3Component
}, {
  path: 'accueil',
  component: AccueilComponent
}];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
