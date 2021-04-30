//
//  BookModel.swift
//  phpApiRequest
//
//  Created by HENRY on 2021/4/30.
//

import Foundation
struct BookModel : Codable{
    let author : String
    let bookID : Int
    let bookNo : String
    let name: String
    let price : String
    let title : String
}
