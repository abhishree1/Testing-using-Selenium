package com.baker.test;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.chrome.ChromeOptions;

public class bakertest {

	public static void main(String[] args) {
		
//		ChromeOptions chromeOptions = new ChromeOptions();
//		chromeOptions.setHeadless(true);
		System.setProperty("webdriver.chrome.driver", "D:\\selenium\\bakertest\\src\\drivers\\chromedriver.exe");
		//WebDriver driver = new ChromeDriver(chromeOptions);
		WebDriver driver = new ChromeDriver();
		driver.get("http://localhost/sqta/index.php");
		
		driver.findElement(By.id("exampleFormControlInput1")).sendKeys("abc@gmail.com");
		driver.findElement(By.id("exampleFormControlTextarea1")).sendKeys("Comments");
		driver.findElement(By.className("btn.btn-success")).click();
		
	}

}
