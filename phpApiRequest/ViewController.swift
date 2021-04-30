//
//  ViewController.swift
//  phpApiRequest
//
//  Created by HENRY on 2021/4/30.
//

import UIKit

class ViewController: UIViewController {
    @IBOutlet weak var tableView: UITableView!
    
    var bookList : [BookModel] = []
    
    
    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view.
        tableView.dataSource = self
        BookApi.requestBookList {  (bookList ) in
            self.bookList = bookList
            self.tableView.reloadData()
        }
    }

}

extension ViewController : UITableViewDataSource{
    func tableView(_ tableView: UITableView, numberOfRowsInSection section: Int) -> Int {
        return bookList.count
    }
    
    func tableView(_ tableView: UITableView, cellForRowAt indexPath: IndexPath) -> UITableViewCell {
        let cell = tableView.dequeueReusableCell(withIdentifier: "cell", for: indexPath)
        let book = bookList[indexPath.row]
        cell.textLabel?.text  = book .title
        cell.detailTextLabel?.text = book.price
        return cell
    }
    
    
}
