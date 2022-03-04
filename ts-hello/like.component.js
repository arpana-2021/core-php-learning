"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.LikeComponent = void 0;
var LikeComponent = /** @class */ (function () {
    // likesCount: number
    // isSelected: boolean
    function LikeComponent(_likesCount, _isSelected) {
        this._likesCount = _likesCount;
        this._isSelected = _isSelected;
        // this.likesCount= likesCount
        // this.isSelected= isSelected
    }
    LikeComponent.prototype.onClick = function () {
        // if(this.isSelected){
        //     this.likesCount--;
        //    // this.isSelected= false;
        // }
        // else{
        //     this.likesCount++;
        //    // this.isSelected= true;
        // }
        this._likesCount += (this._isSelected) ? -1 : +1;
        this._isSelected = !this._isSelected;
    };
    Object.defineProperty(LikeComponent.prototype, "likesCount", {
        get: function () {
            return this._likesCount;
        },
        enumerable: false,
        configurable: true
    });
    Object.defineProperty(LikeComponent.prototype, "isSelected", {
        get: function () {
            return this._isSelected;
        },
        enumerable: false,
        configurable: true
    });
    return LikeComponent;
}());
exports.LikeComponent = LikeComponent;