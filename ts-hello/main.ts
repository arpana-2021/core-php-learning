import { LikeComponent } from './like.component';

// function doSomething(){
//     for(var i=0; i<5; i++){
//         console.log(i);
//     }
//     console.log('Finally:' + i);
// }
// doSomething();

// let aaa: number;
// let b: boolean;
// let c: string;
// let d: any;
// let e: number[] = [1,2,3]
// let f: any[] = [1,true, 'a', false];

// const ColorRed=0;
// const ColorBlue=1;
// const ColorGreen= 2;

// enum Color { Red=0, Blue=1, Green=2 }
// let backGroundColor = Color.Green;

//Type Assertions
// let message;
// message = 'abcd';
// let endWithC = (<string>message).endsWith('d');
// or //let alternativeWay= (message as string).endsWith('c');

let component = new LikeComponent(10, true);
component.onClick();
console.log(`LikesCount:${component.likesCount}, isSelected: ${component.isSelected}`);

