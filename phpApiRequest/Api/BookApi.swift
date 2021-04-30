//
//  BookApi.swift
//  phpApiRequest
//
//  Created by HENRY on 2021/4/30.
//

import Foundation
import Alamofire

// bookUrl 改成你的 5_pdo_query_json_ok.php 網址
let bookUrl = "http://localhost:8888/0429/_05_pdo_query_json_ok.php";

class BookApi {
    
    class func requestBookList(complete:@escaping ([BookModel]) -> Void) {
        AF.request(bookUrl).responseDecodable(of:[BookModel].self) { (response) in
            switch response.result{
            case let .success(bookList):
                // update ui must in  main queue
                DispatchQueue.main.async {
                    complete(bookList)
                }
            case let .failure(error):
                print(error)
            
            }
        }
    }
}
